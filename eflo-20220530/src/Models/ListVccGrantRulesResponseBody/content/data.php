<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccGrantRulesResponseBody\content;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $erId;

    /**
     * @var string
     */
    public $grantRuleId;

    /**
     * @var string
     */
    public $grantTenantId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var bool
     */
    public $used;
    protected $_name = [
        'createTime' => 'CreateTime',
        'erId' => 'ErId',
        'grantRuleId' => 'GrantRuleId',
        'grantTenantId' => 'GrantTenantId',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'product' => 'Product',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tenantId' => 'TenantId',
        'used' => 'Used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
