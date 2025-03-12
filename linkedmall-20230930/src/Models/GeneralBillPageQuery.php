<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GeneralBillPageQuery extends Model
{
    /**
     * @var bool
     */
    public $asc;

    /**
     * @var string
     */
    public $billId;

    /**
     * @var string
     */
    public $billPeriod;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

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
    public $shopId;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'asc'            => 'asc',
        'billId'         => 'billId',
        'billPeriod'     => 'billPeriod',
        'limit'          => 'limit',
        'orderBy'        => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber'     => 'pageNumber',
        'pageSize'       => 'pageSize',
        'shopId'         => 'shopId',
        'start'          => 'start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['asc'] = $this->asc;
        }
        if (null !== $this->billId) {
            $res['billId'] = $this->billId;
        }
        if (null !== $this->billPeriod) {
            $res['billPeriod'] = $this->billPeriod;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }
        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
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
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GeneralBillPageQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['asc'])) {
            $model->asc = $map['asc'];
        }
        if (isset($map['billId'])) {
            $model->billId = $map['billId'];
        }
        if (isset($map['billPeriod'])) {
            $model->billPeriod = $map['billPeriod'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }
        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
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
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
