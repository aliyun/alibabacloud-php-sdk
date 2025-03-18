<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeVendorApiListResponseBody;

use AlibabaCloud\Tea\Model;

class apiList extends Model
{
    /**
     * @example {
     * "cmd": "DescribeAclApiDispatch"
     * }
     *
     * @var string
     */
    public $advanceConfig;

    /**
     * @example VerifyMobile
     *
     * @var string
     */
    public $apiName;

    /**
     * @example 2017-08-01
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @example true
     *
     * @var bool
     */
    public $needAdvanceConfig;

    /**
     * @example false
     *
     * @var bool
     */
    public $needPageInfo;

    /**
     * @example {\\"Count\\": 10, \\"TotalCount\\": 23, \\"PageSize\\": 10, \\"CurrentPage\\": 1}
     *
     * @var string
     */
    public $pageInfo;

    /**
     * @example [
     * {
     * "name": "Domain",
     * "type": "String",
     * "isRequired": true,
     * "exampleValue": "www.***.com",
     * "description": "www.***.com"
     * }
     * ]
     *
     * @var string
     */
    public $parameter;

    /**
     * @example cfw
     *
     * @var string
     */
    public $productCode;

    /**
     * @example cfw.xxx.com
     *
     * @var string
     */
    public $productDomain;

    /**
     * @example waf
     *
     * @var string
     */
    public $productName;

    /**
     * @example https
     *
     * @var string
     */
    public $protocol;

    /**
     * @example Azure
     *
     * @var string
     */
    public $vendorCode;
    protected $_name = [
        'advanceConfig' => 'AdvanceConfig',
        'apiName' => 'ApiName',
        'apiVersion' => 'ApiVersion',
        'method' => 'Method',
        'needAdvanceConfig' => 'NeedAdvanceConfig',
        'needPageInfo' => 'NeedPageInfo',
        'pageInfo' => 'PageInfo',
        'parameter' => 'Parameter',
        'productCode' => 'ProductCode',
        'productDomain' => 'ProductDomain',
        'productName' => 'ProductName',
        'protocol' => 'Protocol',
        'vendorCode' => 'VendorCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceConfig) {
            $res['AdvanceConfig'] = $this->advanceConfig;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->needAdvanceConfig) {
            $res['NeedAdvanceConfig'] = $this->needAdvanceConfig;
        }
        if (null !== $this->needPageInfo) {
            $res['NeedPageInfo'] = $this->needPageInfo;
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = $this->pageInfo;
        }
        if (null !== $this->parameter) {
            $res['Parameter'] = $this->parameter;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productDomain) {
            $res['ProductDomain'] = $this->productDomain;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->vendorCode) {
            $res['VendorCode'] = $this->vendorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvanceConfig'])) {
            $model->advanceConfig = $map['AdvanceConfig'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['NeedAdvanceConfig'])) {
            $model->needAdvanceConfig = $map['NeedAdvanceConfig'];
        }
        if (isset($map['NeedPageInfo'])) {
            $model->needPageInfo = $map['NeedPageInfo'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = $map['PageInfo'];
        }
        if (isset($map['Parameter'])) {
            $model->parameter = $map['Parameter'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductDomain'])) {
            $model->productDomain = $map['ProductDomain'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['VendorCode'])) {
            $model->vendorCode = $map['VendorCode'];
        }

        return $model;
    }
}
