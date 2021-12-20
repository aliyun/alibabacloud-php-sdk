<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListSQLReviewOriginSQLShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $orderActionDetailShrink;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderActionDetailShrink' => 'OrderActionDetail',
        'orderId'                 => 'OrderId',
        'regionId'                => 'RegionId',
        'tid'                     => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderActionDetailShrink) {
            $res['OrderActionDetail'] = $this->orderActionDetailShrink;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSQLReviewOriginSQLShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderActionDetail'])) {
            $model->orderActionDetailShrink = $map['OrderActionDetail'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
