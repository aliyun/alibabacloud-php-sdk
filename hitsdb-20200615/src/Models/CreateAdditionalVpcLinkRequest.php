<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;

class CreateAdditionalVpcLinkRequest extends Model
{
    /**
     * @var string
     */
    public $additionalVpcId;

    /**
     * @var string
     */
    public $additionalVswitchId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'additionalVpcId' => 'AdditionalVpcId',
        'additionalVswitchId' => 'AdditionalVswitchId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalVpcId) {
            $res['AdditionalVpcId'] = $this->additionalVpcId;
        }

        if (null !== $this->additionalVswitchId) {
            $res['AdditionalVswitchId'] = $this->additionalVswitchId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['AdditionalVpcId'])) {
            $model->additionalVpcId = $map['AdditionalVpcId'];
        }

        if (isset($map['AdditionalVswitchId'])) {
            $model->additionalVswitchId = $map['AdditionalVswitchId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
