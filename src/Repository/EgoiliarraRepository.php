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

    public function getBarrutiak()
    {
        $qb = $this->createQueryBuilder('e');
        $qb->groupBy('e.name')
            ;

        return $qb->getQuery()->getResult();
    }


    public function search($data)
    {

        $qb = $this->createQueryBuilder('e');

        if ($data->getBarrutia()) {
            $qb->andWhere('e.barrutia=:barrutiaid')->setParameter('barrutiaid', $data->getBarrutia()->getId());
        }

        if ($data->getName()) {
            $qb->andWhere('e.name like :izena')->setParameter('izena', '%' . $data->getName() . '%');
        }

        if ($data->getMatrikula()) {
            $qb->andWhere('e.matrikula like :matrikula')->setParameter('matrikula', '%' . $data->getMatrikula() . '%');
        }

        if ($data->getMarka()) {
            $qb->andWhere('e.marka like :marka')->setParameter('marka', '%' . $data->getMarka() . '%');
        }

        if ($data->getModelo()) {
            $qb->andWhere('e.modelo like :modelo')->setParameter('modelo', '%' . $data->getModelo() . '%');
        }

        if ($data->getDni()) {
            $qb->andWhere('e.dni like :nan')->setParameter('nan', '%' . $data->getDni() . '%');
        }

        if ($data->getTelefono1()) {
            $qb->andWhere('e.telefono1 like :telf')->setParameter('telf', '%' . $data->getTelefono1() . '%');
        }

        if ($data->getHelbidea()) {
            $qb->andWhere('e.helbidea like :helbide')->setParameter('helbide', '%' . $data->getHelbidea() . '%');
        }


        return $qb->getQuery()->getResult();
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
