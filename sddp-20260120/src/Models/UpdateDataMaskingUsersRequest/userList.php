<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models\UpdateDataMaskingUsersRequest;

use AlibabaCloud\Dara\Model;

class userList extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $authDb;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'accountId' => 'AccountId',
        'authDb' => 'AuthDb',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->authDb) {
            $res['AuthDb'] = $this->authDb;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AuthDb'])) {
            $model->authDb = $map['AuthDb'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
