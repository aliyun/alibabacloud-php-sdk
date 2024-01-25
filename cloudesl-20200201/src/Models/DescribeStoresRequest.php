<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DescribeStoresRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 2020-03-06T02:58:16Z
     *
     * @var string
     */
    public $fromDate;

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
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @example 1.1.0
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example 2020-03-08T02:58:16Z
     *
     * @var string
     */
    public $toDate;

    /**
     * @example 123456
     *
     * @var string
     */
    public $userStoreCode;
    protected $_name = [
        'extraParams'     => 'ExtraParams',
        'fromDate'        => 'FromDate',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'storeId'         => 'StoreId',
        'storeName'       => 'StoreName',
        'templateVersion' => 'TemplateVersion',
        'toDate'          => 'ToDate',
        'userStoreCode'   => 'UserStoreCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
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
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->toDate) {
            $res['ToDate'] = $this->toDate;
        }
        if (null !== $this->userStoreCode) {
            $res['UserStoreCode'] = $this->userStoreCode;
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
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
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
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['ToDate'])) {
            $model->toDate = $map['ToDate'];
        }
        if (isset($map['UserStoreCode'])) {
            $model->userStoreCode = $map['UserStoreCode'];
        }

        return $model;
    }
}
