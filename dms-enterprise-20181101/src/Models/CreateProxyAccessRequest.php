<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateProxyAccessRequest extends Model
{
    /**
     * @var string
     */
    public $indepAccount;

    /**
     * @var string
     */
    public $indepPassword;

    /**
     * @var int
     */
    public $proxyId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'indepAccount' => 'IndepAccount',
        'indepPassword' => 'IndepPassword',
        'proxyId' => 'ProxyId',
        'tid' => 'Tid',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indepAccount) {
            $res['IndepAccount'] = $this->indepAccount;
        }

        if (null !== $this->indepPassword) {
            $res['IndepPassword'] = $this->indepPassword;
        }

        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndepAccount'])) {
            $model->indepAccount = $map['IndepAccount'];
        }

        if (isset($map['IndepPassword'])) {
            $model->indepPassword = $map['IndepPassword'];
        }

        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
