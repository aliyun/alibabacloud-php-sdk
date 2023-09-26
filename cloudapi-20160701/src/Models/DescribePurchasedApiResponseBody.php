<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribePurchasedApiResponseBody\pathParameters;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribePurchasedApiResponseBody\requestBody;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribePurchasedApiResponseBody\requestHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribePurchasedApiResponseBody\requestQueries;
use AlibabaCloud\Tea\Model;

class DescribePurchasedApiResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $bodyFormat;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var string
     */
    public $httpProtocol;

    /**
     * @var string
     */
    public $mock;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $path;

    /**
     * @var pathParameters
     */
    public $pathParameters;

    /**
     * @var string
     */
    public $postBodyDescription;

    /**
     * @var string
     */
    public $postBodyType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var requestBody
     */
    public $requestBody;

    /**
     * @var requestHeaders
     */
    public $requestHeaders;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var requestQueries
     */
    public $requestQueries;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiId'               => 'ApiId',
        'apiName'             => 'ApiName',
        'bodyFormat'          => 'BodyFormat',
        'createdTime'         => 'CreatedTime',
        'description'         => 'Description',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'httpMethod'          => 'HttpMethod',
        'httpProtocol'        => 'HttpProtocol',
        'mock'                => 'Mock',
        'mockResult'          => 'MockResult',
        'modifiedTime'        => 'ModifiedTime',
        'path'                => 'Path',
        'pathParameters'      => 'PathParameters',
        'postBodyDescription' => 'PostBodyDescription',
        'postBodyType'        => 'PostBodyType',
        'regionId'            => 'RegionId',
        'requestBody'         => 'RequestBody',
        'requestHeaders'      => 'RequestHeaders',
        'requestId'           => 'RequestId',
        'requestQueries'      => 'RequestQueries',
        'resultSample'        => 'ResultSample',
        'resultType'          => 'ResultType',
        'visibility'          => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->httpProtocol) {
            $res['HttpProtocol'] = $this->httpProtocol;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathParameters) {
            $res['PathParameters'] = null !== $this->pathParameters ? $this->pathParameters->toMap() : null;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->postBodyType) {
            $res['PostBodyType'] = $this->postBodyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = null !== $this->requestBody ? $this->requestBody->toMap() : null;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = null !== $this->requestHeaders ? $this->requestHeaders->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestQueries) {
            $res['RequestQueries'] = null !== $this->requestQueries ? $this->requestQueries->toMap() : null;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePurchasedApiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['HttpProtocol'])) {
            $model->httpProtocol = $map['HttpProtocol'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathParameters'])) {
            $model->pathParameters = pathParameters::fromMap($map['PathParameters']);
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['PostBodyType'])) {
            $model->postBodyType = $map['PostBodyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = requestBody::fromMap($map['RequestBody']);
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = requestHeaders::fromMap($map['RequestHeaders']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestQueries'])) {
            $model->requestQueries = requestQueries::fromMap($map['RequestQueries']);
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
