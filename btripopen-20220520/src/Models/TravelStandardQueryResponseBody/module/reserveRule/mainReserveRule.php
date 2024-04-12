<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule;

use AlibabaCloud\Tea\Model;

class mainReserveRule extends Model
{
    /**
     * @var string[]
     */
    public $openServiceTypeList;

    /**
     * @example 2006517149
     *
     * @var int
     */
    public $ruleCode;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @example 6517149
     *
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'openServiceTypeList' => 'open_service_type_list',
        'ruleCode'            => 'rule_code',
        'ruleDesc'            => 'rule_desc',
        'ruleId'              => 'rule_id',
        'ruleName'            => 'rule_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openServiceTypeList) {
            $res['open_service_type_list'] = $this->openServiceTypeList;
        }
        if (null !== $this->ruleCode) {
            $res['rule_code'] = $this->ruleCode;
        }
        if (null !== $this->ruleDesc) {
            $res['rule_desc'] = $this->ruleDesc;
        }
        if (null !== $this->ruleId) {
            $res['rule_id'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['rule_name'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mainReserveRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['open_service_type_list'])) {
            if (!empty($map['open_service_type_list'])) {
                $model->openServiceTypeList = $map['open_service_type_list'];
            }
        }
        if (isset($map['rule_code'])) {
            $model->ruleCode = $map['rule_code'];
        }
        if (isset($map['rule_desc'])) {
            $model->ruleDesc = $map['rule_desc'];
        }
        if (isset($map['rule_id'])) {
            $model->ruleId = $map['rule_id'];
        }
        if (isset($map['rule_name'])) {
            $model->ruleName = $map['rule_name'];
        }

        return $model;
    }
}
