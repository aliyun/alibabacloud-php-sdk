<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ModifySkillGroupRequest extends Model
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
     * @var string
     */
    public $skillGroupId;

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
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'outboundPhoneNumberId' => 'OutboundPhoneNumberId',
        'routingStrategy' => 'RoutingStrategy',
        'skillGroupId' => 'SkillGroupId',
        'skillLevel' => 'SkillLevel',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->outboundPhoneNumberId)) {
            Model::validateArray($this->outboundPhoneNumberId);
        }
        if (\is_array($this->skillLevel)) {
            Model::validateArray($this->skillLevel);
        }
        if (\is_array($this->userId)) {
            Model::validateArray($this->userId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->outboundPhoneNumberId)) {
                $res['OutboundPhoneNumberId'] = [];
                $n1 = 0;
                foreach ($this->outboundPhoneNumberId as $item1) {
                    $res['OutboundPhoneNumberId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->skillLevel) {
            if (\is_array($this->skillLevel)) {
                $res['SkillLevel'] = [];
                $n1 = 0;
                foreach ($this->skillLevel as $item1) {
                    $res['SkillLevel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            if (\is_array($this->userId)) {
                $res['UserId'] = [];
                $n1 = 0;
                foreach ($this->userId as $item1) {
                    $res['UserId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->outboundPhoneNumberId = [];
                $n1 = 0;
                foreach ($map['OutboundPhoneNumberId'] as $item1) {
                    $model->outboundPhoneNumberId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['SkillLevel'])) {
            if (!empty($map['SkillLevel'])) {
                $model->skillLevel = [];
                $n1 = 0;
                foreach ($map['SkillLevel'] as $item1) {
                    $model->skillLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            if (!empty($map['UserId'])) {
                $model->userId = [];
                $n1 = 0;
                foreach ($map['UserId'] as $item1) {
                    $model->userId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
