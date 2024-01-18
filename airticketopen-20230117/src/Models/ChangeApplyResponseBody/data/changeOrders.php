<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody\data\changeOrders\passengers;
use AlibabaCloud\Tea\Model;

class changeOrders extends Model
{
    /**
     * @example 49884*****950
     *
     * @var int
     */
    public $changeOrderNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $changeOrderStatus;

    /**
     * @example desc reason
     *
     * @var string
     */
    public $failReason;

    /**
     * @var passengers[]
     */
    public $passengers;
    protected $_name = [
        'changeOrderNum'    => 'change_order_num',
        'changeOrderStatus' => 'change_order_status',
        'failReason'        => 'fail_reason',
        'passengers'        => 'passengers',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['passengers'] = [];
            if (null !== $this->passengers && \is_array($this->passengers)) {
                $n = 0;
                foreach ($this->passengers as $item) {
                    $res['passengers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeOrders
     */
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
                $n                 = 0;
                foreach ($map['passengers'] as $item) {
                    $model->passengers[$n++] = null !== $item ? passengers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
