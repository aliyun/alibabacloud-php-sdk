<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationAccountsForUserResponseBody;

use AlibabaCloud\Dara\Model;

class applicationAccounts extends Model
{
    /**
     * @var string
     */
    public $applicationAccountId;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationUsername;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicationAccountId' => 'ApplicationAccountId',
        'applicationId' => 'ApplicationId',
        'applicationUsername' => 'ApplicationUsername',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAccountId) {
            $res['ApplicationAccountId'] = $this->applicationAccountId;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationUsername) {
            $res['ApplicationUsername'] = $this->applicationUsername;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ApplicationAccountId'])) {
            $model->applicationAccountId = $map['ApplicationAccountId'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationUsername'])) {
            $model->applicationUsername = $map['ApplicationUsername'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
