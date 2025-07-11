<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridCloudServerRequest extends Model
{
    /**
     * @description The continent.
     *
     * This parameter is required.
     *
     * @example asiapacific
     *
     * @var string
     */
    public $continents;

    /**
     * @description The name of the node.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $customName;

    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstanceInfo](https://help.aliyun.com/document_detail/140857.html) operation to query the ID of the WAF instance.
     *
     * This parameter is required.
     *
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the node.
     *
     * This parameter is required.
     *
     * @example b1bf3f544f30c1de0b72d91290**ccb
     *
     * @var string
     */
    public $mid;

    /**
     * @description The cloud service provider.
     *
     * This parameter is required.
     *
     * @example aliyun
     *
     * @var string
     */
    public $operator;

    /**
     * @description The city.
     *
     * This parameter is required.
     *
     * @example beijing
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The region of the WAF instance. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: Outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'continents' => 'Continents',
        'customName' => 'CustomName',
        'instanceId' => 'InstanceId',
        'mid' => 'Mid',
        'operator' => 'Operator',
        'regionCode' => 'RegionCode',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->continents) {
            $res['Continents'] = $this->continents;
        }
        if (null !== $this->customName) {
            $res['CustomName'] = $this->customName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
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
     * @return ModifyHybridCloudServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Continents'])) {
            $model->continents = $map['Continents'];
        }
        if (isset($map['CustomName'])) {
            $model->customName = $map['CustomName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
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
