<?php declare(strict_types=1);

namespace App\Repository;

class EntityRepository
{
    /** @var array */
    private $entities = [];

    /**
     * EntityRepository constructor.
     */
    public function __construct()
    {
        $this->entities = json_decode(file_get_contents(__DIR__ . '/../../var/entities.json'), true);
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->entities['list'];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getById(int $id): ?array
    {
        foreach ($this->getAll() as $entity) {
            if ($id === $entity['id']) {
                return $entity;
            }
        }

        return null;
    }
}