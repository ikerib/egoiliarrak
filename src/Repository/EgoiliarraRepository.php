<?php

namespace App\Repository;

use App\Entity\Egoiliarra;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Egoiliarra|null find($id, $lockMode = null, $lockVersion = null)
 * @method Egoiliarra|null findOneBy(array $criteria, array $orderBy = null)
 * @method Egoiliarra[]    findAll()
 * @method Egoiliarra[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EgoiliarraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Egoiliarra::class);
    }

    // /**
    //  * @return Egoiliarra[] Returns an array of Egoiliarra objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Egoiliarra
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
