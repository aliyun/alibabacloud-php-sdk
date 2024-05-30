<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateSwitchStatusRequest extends Model
{
    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example 900001
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The status of the rule. Valid values: on and off.
     *
     * This parameter is required.
     * @example on
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ruleId' => 'RuleId',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateSwitchStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
