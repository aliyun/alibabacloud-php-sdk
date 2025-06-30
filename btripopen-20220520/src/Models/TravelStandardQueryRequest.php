<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TravelStandardQueryRequest extends Model
{
    /**
     * @var bool
     */
    public $fromGroup;

    /**
     * @var int
     */
    public $ruleCode;

    /**
     * @var string[]
     */
    public $serviceTypeList;
    protected $_name = [
        'fromGroup' => 'from_group',
        'ruleCode' => 'rule_code',
        'serviceTypeList' => 'service_type_list',
    ];

    public function validate()
    {
        if (\is_array($this->serviceTypeList)) {
            Model::validateArray($this->serviceTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromGroup) {
            $res['from_group'] = $this->fromGroup;
        }

        if (null !== $this->ruleCode) {
            $res['rule_code'] = $this->ruleCode;
        }

        if (null !== $this->serviceTypeList) {
            if (\is_array($this->serviceTypeList)) {
                $res['service_type_list'] = [];
                $n1 = 0;
                foreach ($this->serviceTypeList as $item1) {
                    $res['service_type_list'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['from_group'])) {
            $model->fromGroup = $map['from_group'];
        }

        if (isset($map['rule_code'])) {
            $model->ruleCode = $map['rule_code'];
        }

        if (isset($map['service_type_list'])) {
            if (!empty($map['service_type_list'])) {
                $model->serviceTypeList = [];
                $n1 = 0;
                foreach ($map['service_type_list'] as $item1) {
                    $model->serviceTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
