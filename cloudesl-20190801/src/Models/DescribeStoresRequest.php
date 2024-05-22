<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class DescribeStoresRequest extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $companyId;

    /**
     * @var string
     */
    public $fromDate;

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
    public $storeId;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $toDate;
    protected $_name = [
        'brand'      => 'Brand',
        'companyId'  => 'CompanyId',
        'fromDate'   => 'FromDate',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'storeId'    => 'StoreId',
        'storeName'  => 'StoreName',
        'toDate'     => 'ToDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->fromDate) {
            $res['FromDate'] = $this->fromDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->toDate) {
            $res['ToDate'] = $this->toDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStoresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['FromDate'])) {
            $model->fromDate = $map['FromDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['ToDate'])) {
            $model->toDate = $map['ToDate'];
        }

        return $model;
    }
}
