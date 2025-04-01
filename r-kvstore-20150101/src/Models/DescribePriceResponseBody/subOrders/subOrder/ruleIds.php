<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

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
                    $res['RuleId'][$n1++] = $item1;
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
                    $model->ruleId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
