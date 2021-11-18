<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateSkillGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $allowPrivateOutboundNumber;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $outboundPhoneNumberId;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var int[]
     */
    public $skillLevel;

    /**
     * @var string[]
     */
    public $userId;
    protected $_name = [
        'allowPrivateOutboundNumber' => 'AllowPrivateOutboundNumber',
        'description'                => 'Description',
        'instanceId'                 => 'InstanceId',
        'name'                       => 'Name',
        'outboundPhoneNumberId'      => 'OutboundPhoneNumberId',
        'routingStrategy'            => 'RoutingStrategy',
        'skillLevel'                 => 'SkillLevel',
        'userId'                     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowPrivateOutboundNumber) {
            $res['AllowPrivateOutboundNumber'] = $this->allowPrivateOutboundNumber;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outboundPhoneNumberId) {
            $res['OutboundPhoneNumberId'] = $this->outboundPhoneNumberId;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = $this->skillLevel;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowPrivateOutboundNumber'])) {
            $model->allowPrivateOutboundNumber = $map['AllowPrivateOutboundNumber'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutboundPhoneNumberId'])) {
            if (!empty($map['OutboundPhoneNumberId'])) {
                $model->outboundPhoneNumberId = $map['OutboundPhoneNumberId'];
            }
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['SkillLevel'])) {
            if (!empty($map['SkillLevel'])) {
                $model->skillLevel = $map['SkillLevel'];
            }
        }
        if (isset($map['UserId'])) {
            if (!empty($map['UserId'])) {
                $model->userId = $map['UserId'];
            }
        }

        return $model;
    }
}
