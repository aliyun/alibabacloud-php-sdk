<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateProtectionModuleRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac_custom
     *
     * @var string
     */
    public $defenseType;

    /**
     * @description This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @example waf-cn-0xldbqt****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example {"action":"monitor","name":"test","scene":"custom_acl","conditions":[{"opCode":1,"key":"URL","values":"/example"}]}
     *
     * @var string
     */
    public $rule;
    protected $_name = [
        'defenseType'     => 'DefenseType',
        'domain'          => 'Domain',
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'rule'            => 'Rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseType) {
            $res['DefenseType'] = $this->defenseType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProtectionModuleRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseType'])) {
            $model->defenseType = $map['DefenseType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
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
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
