<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class DeleteRuleRequest extends Model
{
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
        'forceDelete'  => 'ForceDelete',
        'isSchemeData' => 'IsSchemeData',
        'ruleId'       => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
