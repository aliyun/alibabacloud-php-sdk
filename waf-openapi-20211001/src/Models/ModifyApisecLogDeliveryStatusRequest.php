<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyApisecLogDeliveryStatusRequest extends Model
{
    /**
     * @description The type of the log subscription. Valid values:
     *
     *   **risk**: risk information.
     *   **event**: attack event information.
     *   **asset**: asset information.
     *
     * This parameter is required.
     * @example risk
     *
     * @var string
     */
    public $assertKey;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v3_public_cn-uqm2z****0a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region where the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
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

    /**
     * @description The status of API security log subscription. Valid values:
     *
     *   **true**: enabled.
     *   **false**: disabled.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'assertKey'                      => 'AssertKey',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'status'                         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assertKey) {
            $res['AssertKey'] = $this->assertKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApisecLogDeliveryStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssertKey'])) {
            $model->assertKey = $map['AssertKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
