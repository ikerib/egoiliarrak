<?php

namespace App\Repository;

use App\Entity\Barrutia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Barrutia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Barrutia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Barrutia[]    findAll()
 * @method Barrutia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BarrutiaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Barrutia::class);
    }

    // /**
    //  * @return Barrutia[] Returns an array of Barrutia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Barrutia
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
