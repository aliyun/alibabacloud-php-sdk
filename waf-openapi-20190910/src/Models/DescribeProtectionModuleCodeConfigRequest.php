<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeProtectionModuleCodeConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 14
     *
     * @var int
     */
    public $codeType;

    /**
     * @example 0
     *
     * @var int
     */
    public $codeValue;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'codeType'        => 'CodeType',
        'codeValue'       => 'CodeValue',
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }
        if (null !== $this->codeValue) {
            $res['CodeValue'] = $this->codeValue;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtectionModuleCodeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }
        if (isset($map['CodeValue'])) {
            $model->codeValue = $map['CodeValue'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
