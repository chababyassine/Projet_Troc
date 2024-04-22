<?php

namespace App\Repository;

use App\Entity\CardsHome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CardsHome>
 *
 * @method CardsHome|null find($id, $lockMode = null, $lockVersion = null)
 * @method CardsHome|null findOneBy(array $criteria, array $orderBy = null)
 * @method CardsHome[]    findAll()
 * @method CardsHome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CardsHomeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CardsHome::class);
    }

    //    /**
    //     * @return CardsHome[] Returns an array of CardsHome objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?CardsHome
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
