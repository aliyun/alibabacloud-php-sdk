<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody\data\changeOrders\passengers;

class changeOrders extends Model
{
    /**
     * @var int
     */
    public $changeOrderNum;

    /**
     * @var int
     */
    public $changeOrderStatus;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var passengers[]
     */
    public $passengers;
    protected $_name = [
        'changeOrderNum' => 'change_order_num',
        'changeOrderStatus' => 'change_order_status',
        'failReason' => 'fail_reason',
        'passengers' => 'passengers',
    ];

    public function validate()
    {
        if (\is_array($this->passengers)) {
            Model::validateArray($this->passengers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeOrderNum) {
            $res['change_order_num'] = $this->changeOrderNum;
        }

        if (null !== $this->changeOrderStatus) {
            $res['change_order_status'] = $this->changeOrderStatus;
        }

        if (null !== $this->failReason) {
            $res['fail_reason'] = $this->failReason;
        }

        if (null !== $this->passengers) {
            if (\is_array($this->passengers)) {
                $res['passengers'] = [];
                $n1 = 0;
                foreach ($this->passengers as $item1) {
                    $res['passengers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['change_order_num'])) {
            $model->changeOrderNum = $map['change_order_num'];
        }

        if (isset($map['change_order_status'])) {
            $model->changeOrderStatus = $map['change_order_status'];
        }

        if (isset($map['fail_reason'])) {
            $model->failReason = $map['fail_reason'];
        }

        if (isset($map['passengers'])) {
            if (!empty($map['passengers'])) {
                $model->passengers = [];
                $n1 = 0;
                foreach ($map['passengers'] as $item1) {
                    $model->passengers[$n1] = passengers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
