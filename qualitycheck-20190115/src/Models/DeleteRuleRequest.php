<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class DeleteRuleRequest extends Model
{
    /**
     * @description baseMeAgentId
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @example true
     *
     * @var bool
     */
    public $forceDelete;

    /**
     * @example 1
     *
     * @var int
     */
    public $isSchemeData;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'forceDelete'   => 'ForceDelete',
        'isSchemeData'  => 'IsSchemeData',
        'ruleId'        => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->forceDelete) {
            $res['ForceDelete'] = $this->forceDelete;
        }
        if (null !== $this->isSchemeData) {
            $res['IsSchemeData'] = $this->isSchemeData;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['ForceDelete'])) {
            $model->forceDelete = $map['ForceDelete'];
        }
        if (isset($map['IsSchemeData'])) {
            $model->isSchemeData = $map['IsSchemeData'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
