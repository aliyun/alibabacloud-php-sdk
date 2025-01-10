<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccGrantRuleResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The time when the data address was created.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Lingjun HUB Instance ID
     *
     * @example er-aueyxxsy
     *
     * @var string
     */
    public $erId;

    /**
     * @description Authorized Resource ID
     *
     * @example grant-rule-jaj34d75h01
     *
     * @var string
     */
    public $grantRuleId;

    /**
     * @description Authorized Tenant ID
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $grantTenantId;

    /**
     * @description Network Instance ID
     *
     * @example vcc-cn-jaj34d75h01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Network Instance Name
     *
     * @example vcc-1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Network Product Code:
     *
     *   **VPD**: Lingjun CIDR block
     *   **VCC**: Lingjun Connection
     *
     * @example VCC
     *
     * @var string
     */
    public $product;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-aek2l4sq6l7unhi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the tenant.
     *
     * @example 1620939556166279
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description Whether the current authorization information has been used; optional values:
     *
     *   **true**: Used
     *   **false**: Not used
     *
     * @example false
     *
     * @var bool
     */
    public $used;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'erId'            => 'ErId',
        'grantRuleId'     => 'GrantRuleId',
        'grantTenantId'   => 'GrantTenantId',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'product'         => 'Product',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tenantId'        => 'TenantId',
        'used'            => 'Used',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->grantRuleId) {
            $res['GrantRuleId'] = $this->grantRuleId;
        }
        if (null !== $this->grantTenantId) {
            $res['GrantTenantId'] = $this->grantTenantId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['GrantRuleId'])) {
            $model->grantRuleId = $map['GrantRuleId'];
        }
        if (isset($map['GrantTenantId'])) {
            $model->grantTenantId = $map['GrantTenantId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
