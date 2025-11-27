<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;

class ruleIds extends Model
{
    /**
     * @var string[]
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        if (\is_array($this->ruleId)) {
            Model::validateArray($this->ruleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleId) {
            if (\is_array($this->ruleId)) {
                $res['RuleId'] = [];
                $n1 = 0;
                foreach ($this->ruleId as $item1) {
                    $res['RuleId'][$n1] = $item1;
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
        if (isset($map['RuleId'])) {
            if (!empty($map['RuleId'])) {
                $model->ruleId = [];
                $n1 = 0;
                foreach ($map['RuleId'] as $item1) {
                    $model->ruleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
