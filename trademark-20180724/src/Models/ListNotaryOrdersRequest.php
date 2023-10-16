<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ListNotaryOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $endOrderDate;

    /**
     * @var int
     */
    public $notaryStatus;

    /**
     * @var int
     */
    public $notaryType;

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
    public $sortByType;

    /**
     * @var int
     */
    public $sortKeyType;

    /**
     * @var int
     */
    public $startOrderDate;
    protected $_name = [
        'aliyunOrderId'  => 'AliyunOrderId',
        'bizId'          => 'BizId',
        'endOrderDate'   => 'EndOrderDate',
        'notaryStatus'   => 'NotaryStatus',
        'notaryType'     => 'NotaryType',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'sortByType'     => 'SortByType',
        'sortKeyType'    => 'SortKeyType',
        'startOrderDate' => 'StartOrderDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->endOrderDate) {
            $res['EndOrderDate'] = $this->endOrderDate;
        }
        if (null !== $this->notaryStatus) {
            $res['NotaryStatus'] = $this->notaryStatus;
        }
        if (null !== $this->notaryType) {
            $res['NotaryType'] = $this->notaryType;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortByType) {
            $res['SortByType'] = $this->sortByType;
        }
        if (null !== $this->sortKeyType) {
            $res['SortKeyType'] = $this->sortKeyType;
        }
        if (null !== $this->startOrderDate) {
            $res['StartOrderDate'] = $this->startOrderDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNotaryOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['EndOrderDate'])) {
            $model->endOrderDate = $map['EndOrderDate'];
        }
        if (isset($map['NotaryStatus'])) {
            $model->notaryStatus = $map['NotaryStatus'];
        }
        if (isset($map['NotaryType'])) {
            $model->notaryType = $map['NotaryType'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortByType'])) {
            $model->sortByType = $map['SortByType'];
        }
        if (isset($map['SortKeyType'])) {
            $model->sortKeyType = $map['SortKeyType'];
        }
        if (isset($map['StartOrderDate'])) {
            $model->startOrderDate = $map['StartOrderDate'];
        }

        return $model;
    }
}
