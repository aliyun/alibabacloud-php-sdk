<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForAuthorizationRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForAuthorizationRuleResponseBody\users\validityPeriod;

class users extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var validityPeriod
     */
    public $validityPeriod;

    /**
     * @var string
     */
    public $validityType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'userId' => 'UserId',
        'validityPeriod' => 'ValidityPeriod',
        'validityType' => 'ValidityType',
    ];

    public function validate()
    {
        if (null !== $this->validityPeriod) {
            $this->validityPeriod->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->validityPeriod) {
            $res['ValidityPeriod'] = null !== $this->validityPeriod ? $this->validityPeriod->toArray($noStream) : $this->validityPeriod;
        }

        if (null !== $this->validityType) {
            $res['ValidityType'] = $this->validityType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['ValidityPeriod'])) {
            $model->validityPeriod = validityPeriod::fromMap($map['ValidityPeriod']);
        }

        if (isset($map['ValidityType'])) {
            $model->validityType = $map['ValidityType'];
        }

        return $model;
    }
}
