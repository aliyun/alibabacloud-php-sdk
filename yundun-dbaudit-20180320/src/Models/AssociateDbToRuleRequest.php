<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class AssociateDbToRuleRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ruleIds;

    /**
     * @var string
     */
    public $ruleDbRelations;

    /**
     * @var string
     */
    public $operType;
    protected $_name = [
        'regionId'        => 'RegionId',
        'instanceId'      => 'InstanceId',
        'ruleIds'         => 'RuleIds',
        'ruleDbRelations' => 'RuleDbRelations',
        'operType'        => 'OperType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->ruleDbRelations) {
            $res['RuleDbRelations'] = $this->ruleDbRelations;
        }
        if (null !== $this->operType) {
            $res['OperType'] = $this->operType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateDbToRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }
        if (isset($map['RuleDbRelations'])) {
            $model->ruleDbRelations = $map['RuleDbRelations'];
        }
        if (isset($map['OperType'])) {
            $model->operType = $map['OperType'];
        }

        return $model;
    }
}
