<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module\items;

use AlibabaCloud\Dara\Model;

class mainReserveRule extends Model
{
    /**
     * @var string[]
     */
    public $openServiceTypeList;

    /**
     * @var int
     */
    public $ruleCode;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'openServiceTypeList' => 'open_service_type_list',
        'ruleCode' => 'rule_code',
        'ruleDesc' => 'rule_desc',
        'ruleId' => 'rule_id',
        'ruleName' => 'rule_name',
    ];

    public function validate()
    {
        if (\is_array($this->openServiceTypeList)) {
            Model::validateArray($this->openServiceTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openServiceTypeList) {
            if (\is_array($this->openServiceTypeList)) {
                $res['open_service_type_list'] = [];
                $n1 = 0;
                foreach ($this->openServiceTypeList as $item1) {
                    $res['open_service_type_list'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['open_service_type_list'])) {
            if (!empty($map['open_service_type_list'])) {
                $model->openServiceTypeList = [];
                $n1 = 0;
                foreach ($map['open_service_type_list'] as $item1) {
                    $model->openServiceTypeList[$n1++] = $item1;
                }
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
