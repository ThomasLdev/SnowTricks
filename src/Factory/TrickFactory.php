<?php

namespace App\Factory;

use App\Entity\Trick;
use App\Repository\TrickRepository;
use DateTime;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Trick|Proxy createOne(array $attributes = [])
 * @method static Trick[]|Proxy[] createMany(int $number, $attributes = [])
 * @method static Trick|Proxy find($criteria)
 * @method static Trick|Proxy findOrCreate(array $attributes)
 * @method static Trick|Proxy first(string $sortedField = 'id')
 * @method static Trick|Proxy last(string $sortedField = 'id')
 * @method static Trick|Proxy random(array $attributes = [])
 * @method static Trick|Proxy randomOrCreate(array $attributes = [])
 * @method static Trick[]|Proxy[] all()
 * @method static Trick[]|Proxy[] findBy(array $attributes)
 * @method static Trick[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Trick[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static TrickRepository|RepositoryProxy repository()
 * @method Trick|Proxy create($attributes = [])
 */
final class TrickFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://github.com/zenstruck/foundry#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [

            'name' => self::faker()->realText(10),
            'category' => self::faker()->realText(10),
            'description' => self::faker()->paragraph(20, true),
            'created_at' => self::faker()->dateTimeBetween('-30 days', '-1 day'),
            'updated_at' => new DateTime()

            ];

    }

    protected function initialize(): self
    {
        // see https://github.com/zenstruck/foundry#initialization
        return $this
            // ->afterInstantiate(function(Trick $trick) {})
        ;
    }

    protected static function getClass(): string
    {
        return Trick::class;
    }
}
