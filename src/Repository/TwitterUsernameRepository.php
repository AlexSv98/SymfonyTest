<?php

namespace App\Repository;

use App\Entity\TwitterUsername;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TwitterUsername>
 *
 * @method TwitterUsername|null find($id, $lockMode = null, $lockVersion = null)
 * @method TwitterUsername|null findOneBy(array $criteria, array $orderBy = null)
 * @method TwitterUsername[]    findAll()
 * @method TwitterUsername[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TwitterUsernameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TwitterUsername::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(TwitterUsername $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(TwitterUsername $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return TwitterUsername[] Returns an array of TwitterUsername objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TwitterUsername
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
