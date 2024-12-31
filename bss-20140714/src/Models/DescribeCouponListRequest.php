<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models;

use AlibabaCloud\Tea\Model;

class DescribeCouponListRequest extends Model
{
    /**
     * @var string
     */
    public $endDeliveryTime;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startDeliveryTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endDeliveryTime'   => 'EndDeliveryTime',
        'pageNum'           => 'PageNum',
        'pageSize'          => 'PageSize',
        'startDeliveryTime' => 'StartDeliveryTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDeliveryTime) {
            $res['EndDeliveryTime'] = $this->endDeliveryTime;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDeliveryTime) {
            $res['StartDeliveryTime'] = $this->startDeliveryTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCouponListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDeliveryTime'])) {
            $model->endDeliveryTime = $map['EndDeliveryTime'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDeliveryTime'])) {
            $model->startDeliveryTime = $map['StartDeliveryTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
