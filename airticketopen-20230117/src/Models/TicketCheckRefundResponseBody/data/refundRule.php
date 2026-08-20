<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data\refundRule\refundStageRules;

class refundRule extends Model
{
    /**
     * @var refundStageRules[]
     */
    public $refundStageRules;

    /**
     * @var int
     */
    public $refundType;
    protected $_name = [
        'refundStageRules' => 'RefundStageRules',
        'refundType' => 'RefundType',
    ];

    public function validate()
    {
        if (\is_array($this->refundStageRules)) {
            Model::validateArray($this->refundStageRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refundStageRules) {
            if (\is_array($this->refundStageRules)) {
                $res['RefundStageRules'] = [];
                $n1 = 0;
                foreach ($this->refundStageRules as $item1) {
                    $res['RefundStageRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundType) {
            $res['RefundType'] = $this->refundType;
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
        if (isset($map['RefundStageRules'])) {
            if (!empty($map['RefundStageRules'])) {
                $model->refundStageRules = [];
                $n1 = 0;
                foreach ($map['RefundStageRules'] as $item1) {
                    $model->refundStageRules[$n1] = refundStageRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RefundType'])) {
            $model->refundType = $map['RefundType'];
        }

        return $model;
    }
}
