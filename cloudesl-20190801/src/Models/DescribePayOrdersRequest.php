<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class DescribePayOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $fromDate;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $toDate;
    protected $_name = [
        'fromDate'   => 'FromDate',
        'orderId'    => 'OrderId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'toDate'     => 'ToDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromDate) {
            $res['FromDate'] = $this->fromDate;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->toDate) {
            $res['ToDate'] = $this->toDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePayOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromDate'])) {
            $model->fromDate = $map['FromDate'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ToDate'])) {
            $model->toDate = $map['ToDate'];
        }

        return $model;
    }
}
