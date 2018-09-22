<?php

namespace UserBundle\Repository;

use UserBundle\Entity\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param User $user
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getUserDialogs(User $user)
    {
        return $user->getDialogs();
    }

    /**
     * @param string $username
     *
     * @return null|User
     */
    public function findByUsername(string $username)
    {
        return $this->findOneBy(['username' => $username]);
    }
}