<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateProxyAccessRequest extends Model
{
    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $proxyId;

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
    public $tid;
    protected $_name = [
        'userId'        => 'UserId',
        'proxyId'       => 'ProxyId',
        'indepAccount'  => 'IndepAccount',
        'indepPassword' => 'IndepPassword',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->indepAccount) {
            $res['IndepAccount'] = $this->indepAccount;
        }
        if (null !== $this->indepPassword) {
            $res['IndepPassword'] = $this->indepPassword;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProxyAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['IndepAccount'])) {
            $model->indepAccount = $map['IndepAccount'];
        }
        if (isset($map['IndepPassword'])) {
            $model->indepPassword = $map['IndepPassword'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
