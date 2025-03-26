<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class DeleteVpdGrantRuleRequest extends Model
{
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
    public $regionId;
    protected $_name = [
        'erId' => 'ErId',
        'grantRuleId' => 'GrantRuleId',
        'grantTenantId' => 'GrantTenantId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
