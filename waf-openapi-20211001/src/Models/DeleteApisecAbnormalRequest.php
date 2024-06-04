<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DeleteApisecAbnormalRequest extends Model
{
    /**
     * @example c0a96***4b9cd303467402a63dcc
     *
     * @var string
     */
    public $abnormalId;

    /**
     * @example 428
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example waf-cn-n6w***x52m
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfm2th****v6ay
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'abnormalId'                     => 'AbnormalId',
        'clusterId'                      => 'ClusterId',
        'instanceId'                     => 'InstanceId',
        'region'                         => 'Region',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalId) {
            $res['AbnormalId'] = $this->abnormalId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteApisecAbnormalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalId'])) {
            $model->abnormalId = $map['AbnormalId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
