<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class DeleteRuleRequest extends Model
{
    /**
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @var bool
     */
    public $forceDelete;

    /**
     * @var int
     */
    public $isSchemeData;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'forceDelete' => 'ForceDelete',
        'isSchemeData' => 'IsSchemeData',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
