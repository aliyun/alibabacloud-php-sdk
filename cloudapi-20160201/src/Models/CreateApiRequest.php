<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class CreateApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $bodyFormat;

    /**
     * @var string
     */
    public $constantParameters;

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
    public $httpMethod;

    /**
     * @var string
     */
    public $httpProtocol;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
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
    public $requestBody;

    /**
     * @var string
     */
    public $requestHeaders;

    /**
     * @var string
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
    public $securityToken;

    /**
     * @var string
     */
    public $serviceAddress;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var int
     */
    public $serviceTimeout;

    /**
     * @var string
     */
    public $systemParameters;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiName'             => 'ApiName',
        'authType'            => 'AuthType',
        'bodyFormat'          => 'BodyFormat',
        'constantParameters'  => 'ConstantParameters',
        'description'         => 'Description',
        'groupId'             => 'GroupId',
        'httpMethod'          => 'HttpMethod',
        'httpProtocol'        => 'HttpProtocol',
        'path'                => 'Path',
        'pathParameters'      => 'PathParameters',
        'postBodyDescription' => 'PostBodyDescription',
        'postBodyType'        => 'PostBodyType',
        'requestBody'         => 'RequestBody',
        'requestHeaders'      => 'RequestHeaders',
        'requestQueries'      => 'RequestQueries',
        'resultSample'        => 'ResultSample',
        'resultType'          => 'ResultType',
        'securityToken'       => 'SecurityToken',
        'serviceAddress'      => 'ServiceAddress',
        'serviceProtocol'     => 'ServiceProtocol',
        'serviceTimeout'      => 'ServiceTimeout',
        'systemParameters'    => 'SystemParameters',
        'visibility'          => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = $this->constantParameters;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->httpProtocol) {
            $res['HttpProtocol'] = $this->httpProtocol;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathParameters) {
            $res['PathParameters'] = $this->pathParameters;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->postBodyType) {
            $res['PostBodyType'] = $this->postBodyType;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = $this->requestBody;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = $this->requestHeaders;
        }
        if (null !== $this->requestQueries) {
            $res['RequestQueries'] = $this->requestQueries;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = $this->systemParameters;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = $map['ConstantParameters'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['HttpProtocol'])) {
            $model->httpProtocol = $map['HttpProtocol'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathParameters'])) {
            $model->pathParameters = $map['PathParameters'];
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['PostBodyType'])) {
            $model->postBodyType = $map['PostBodyType'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = $map['RequestBody'];
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = $map['RequestHeaders'];
        }
        if (isset($map['RequestQueries'])) {
            $model->requestQueries = $map['RequestQueries'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = $map['SystemParameters'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
