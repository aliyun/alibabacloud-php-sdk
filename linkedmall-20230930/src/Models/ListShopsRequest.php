<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ListShopsRequest extends Model
{
    /**
     * @example 11****02
     *
     * @var string
     */
    public $channelSupplierId;

    /**
     * @example 2022-10-31
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 22****08
     *
     * @var string
     */
    public $shopId;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @example 2022-01-01
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'channelSupplierId' => 'channelSupplierId',
        'endDate'           => 'endDate',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
        'shopId'            => 'shopId',
        'shopName'          => 'shopName',
        'startDate'         => 'startDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelSupplierId) {
            $res['channelSupplierId'] = $this->channelSupplierId;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }
        if (null !== $this->shopName) {
            $res['shopName'] = $this->shopName;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channelSupplierId'])) {
            $model->channelSupplierId = $map['channelSupplierId'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }
        if (isset($map['shopName'])) {
            $model->shopName = $map['shopName'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
