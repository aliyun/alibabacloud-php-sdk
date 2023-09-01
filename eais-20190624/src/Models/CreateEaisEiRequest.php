<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class CreateEaisEiRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example test_ei
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example eais.ei-a6.2xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmvpuy4a5****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example sg-bp16jgp51ttnkbdr****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-bp17wmd1wb6fwlimk****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'instanceName'    => 'InstanceName',
        'instanceType'    => 'InstanceType',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId'       => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEaisEiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
