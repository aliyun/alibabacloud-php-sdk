<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetVccGrantRuleRequest extends Model
{
    /**
     * @description Lingjun HUB Instance ID
     *
     * @example er-aueyxxsy
     *
     * @var string
     */
    public $erId;

    /**
     * @description Authorized Resource Instance ID
     *
     * This parameter is required.
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
     * @description Authorized Instance ID
     *
     * @example vcc-cn-jaj34d75h01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region. This parameter is required.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'erId'          => 'ErId',
        'grantRuleId'   => 'GrantRuleId',
        'grantTenantId' => 'GrantTenantId',
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVccGrantRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
