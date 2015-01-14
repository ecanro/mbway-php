<?php
namespace prbdias\mbway\Alias;

use prbdias\mbway\Alias;

class CreateMerchantAliasResult
{
    /**
     * @var Alias $alias
     */
    protected $alias;

    /**
     * @var string $operationId
     */
    protected $operationId;

    /**
     * @var string $statusCode
     */
    protected $statusCode;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp;

    /**
     * @var string $token
     */
    protected $token;

    /**
     * @return Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Alias $alias
     * @return CreateMerchantAliasResult
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * @param string $operationId
     * @return CreateMerchantAliasResult
     */
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return CreateMerchantAliasResult
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        if ($this->timestamp == null) {
            return null;
        } else {
            return \DateTime::createFromFormat(\DateTime::ATOM, $this->timestamp);
        }
    }

    /**
     * @param \DateTime $timestamp
     * @return CreateMerchantAliasResult
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return CreateMerchantAliasResult
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
