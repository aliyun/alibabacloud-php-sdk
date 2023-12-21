<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateSwitchStatusRequest extends Model
{
    /**
     * @description The rule ID.
     *
     * >  You can call the [ListContainerDefenseRule](~~2590599~~) operation to query the rule ID.
     * @example 900001
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The rule status for container tamper-proofing. Valid values:
     * - **on**
     * - **off**
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
