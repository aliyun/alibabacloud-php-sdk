<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeVendorApiListRequest extends Model
{
    /**
     * @example AddAssetCleanConfig
     *
     * @var string
     */
    public $apiName;

    /**
     * @example Create
     *
     * @var string
     */
    public $keyWord;

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
     * @example waf
     *
     * @var string
     */
    public $productCode;

    /**
     * @example Azure
     *
     * @var string
     */
    public $vendorCode;
    protected $_name = [
        'apiName' => 'ApiName',
        'keyWord' => 'KeyWord',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'vendorCode' => 'VendorCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->vendorCode) {
            $res['VendorCode'] = $this->vendorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVendorApiListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['VendorCode'])) {
            $model->vendorCode = $map['VendorCode'];
        }

        return $model;
    }
}
