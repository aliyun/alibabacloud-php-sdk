<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class CreateVpdGrantRuleRequest extends Model
{
    /**
     * @description Lingjun HUB ID
     *
     * This parameter is required.
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description Authorized Tenant ID
     *
     * This parameter is required.
     * @example 1013666993027780
     *
     * @var string
     */
    public $grantTenantId;

    /**
     * @description Network Instance ID
     *
     * This parameter is required.
     * @example vpd-8rgvqazb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'erId'          => 'ErId',
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
     * @return CreateVpdGrantRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
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
