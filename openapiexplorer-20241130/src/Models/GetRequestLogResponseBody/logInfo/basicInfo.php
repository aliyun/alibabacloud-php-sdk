<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo\basicInfo\accessDeniedDetail;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo\basicInfo\apiDoc;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo\basicInfo\productName;

class basicInfo extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $api;

    /**
     * @var apiDoc
     */
    public $apiDoc;

    /**
     * @var string
     */
    public $apiStyle;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $gatewayProcessTime;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var string
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $logRequestId;

    /**
     * @var string
     */
    public $product;

    /**
     * @var productName
     */
    public $productName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestDuration;

    /**
     * @var string
     */
    public $sdkRequestTime;

    /**
     * @var string
     */
    public $throttlingResult;
    protected $_name = [
        'accessDeniedDetail' => 'accessDeniedDetail',
        'api' => 'api',
        'apiDoc' => 'apiDoc',
        'apiStyle' => 'apiStyle',
        'apiVersion' => 'apiVersion',
        'endpoint' => 'endpoint',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'gatewayProcessTime' => 'gatewayProcessTime',
        'httpMethod' => 'httpMethod',
        'httpStatusCode' => 'httpStatusCode',
        'logRequestId' => 'logRequestId',
        'product' => 'product',
        'productName' => 'productName',
        'regionId' => 'regionId',
        'requestDuration' => 'requestDuration',
        'sdkRequestTime' => 'sdkRequestTime',
        'throttlingResult' => 'throttlingResult',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        if (null !== $this->apiDoc) {
            $this->apiDoc->validate();
        }
        if (null !== $this->productName) {
            $this->productName->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['accessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->api) {
            $res['api'] = $this->api;
        }

        if (null !== $this->apiDoc) {
            $res['apiDoc'] = null !== $this->apiDoc ? $this->apiDoc->toArray($noStream) : $this->apiDoc;
        }

        if (null !== $this->apiStyle) {
            $res['apiStyle'] = $this->apiStyle;
        }

        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->gatewayProcessTime) {
            $res['gatewayProcessTime'] = $this->gatewayProcessTime;
        }

        if (null !== $this->httpMethod) {
            $res['httpMethod'] = $this->httpMethod;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->logRequestId) {
            $res['logRequestId'] = $this->logRequestId;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->productName) {
            $res['productName'] = null !== $this->productName ? $this->productName->toArray($noStream) : $this->productName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestDuration) {
            $res['requestDuration'] = $this->requestDuration;
        }

        if (null !== $this->sdkRequestTime) {
            $res['sdkRequestTime'] = $this->sdkRequestTime;
        }

        if (null !== $this->throttlingResult) {
            $res['throttlingResult'] = $this->throttlingResult;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['accessDeniedDetail']);
        }

        if (isset($map['api'])) {
            $model->api = $map['api'];
        }

        if (isset($map['apiDoc'])) {
            $model->apiDoc = apiDoc::fromMap($map['apiDoc']);
        }

        if (isset($map['apiStyle'])) {
            $model->apiStyle = $map['apiStyle'];
        }

        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['gatewayProcessTime'])) {
            $model->gatewayProcessTime = $map['gatewayProcessTime'];
        }

        if (isset($map['httpMethod'])) {
            $model->httpMethod = $map['httpMethod'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        if (isset($map['logRequestId'])) {
            $model->logRequestId = $map['logRequestId'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['productName'])) {
            $model->productName = productName::fromMap($map['productName']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestDuration'])) {
            $model->requestDuration = $map['requestDuration'];
        }

        if (isset($map['sdkRequestTime'])) {
            $model->sdkRequestTime = $map['sdkRequestTime'];
        }

        if (isset($map['throttlingResult'])) {
            $model->throttlingResult = $map['throttlingResult'];
        }

        return $model;
    }
}
