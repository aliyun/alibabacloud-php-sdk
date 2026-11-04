<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class CreateGatewayApiShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiStatus;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $authRuleName;

    /**
     * @var string
     */
    public $cacheRuleShrink;

    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $defaultLimitRuleShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $headerRulesShrink;

    /**
     * @var string
     */
    public $interfaceType;

    /**
     * @var string
     */
    public $limitRuleShrink;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $migrateRuleShrink;

    /**
     * @var string
     */
    public $mockRuleShrink;

    /**
     * @var bool
     */
    public $needEncrypt;

    /**
     * @var bool
     */
    public $needJsonp;

    /**
     * @var bool
     */
    public $needSign;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $requestBodyModel;

    /**
     * @var string
     */
    public $requestParamsShrink;

    /**
     * @var string
     */
    public $responseBodyModel;

    /**
     * @var string
     */
    public $rpcParameterTypesShrink;

    /**
     * @var string
     */
    public $serialization;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiName' => 'ApiName',
        'apiStatus' => 'ApiStatus',
        'apiType' => 'ApiType',
        'appId' => 'AppId',
        'authRuleName' => 'AuthRuleName',
        'cacheRuleShrink' => 'CacheRule',
        'charset' => 'Charset',
        'contentType' => 'ContentType',
        'defaultLimitRuleShrink' => 'DefaultLimitRule',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'headerRulesShrink' => 'HeaderRules',
        'interfaceType' => 'InterfaceType',
        'limitRuleShrink' => 'LimitRule',
        'method' => 'Method',
        'methodName' => 'MethodName',
        'migrateRuleShrink' => 'MigrateRule',
        'mockRuleShrink' => 'MockRule',
        'needEncrypt' => 'NeedEncrypt',
        'needJsonp' => 'NeedJsonp',
        'needSign' => 'NeedSign',
        'operationType' => 'OperationType',
        'path' => 'Path',
        'requestBodyModel' => 'RequestBodyModel',
        'requestParamsShrink' => 'RequestParams',
        'responseBodyModel' => 'ResponseBodyModel',
        'rpcParameterTypesShrink' => 'RpcParameterTypes',
        'serialization' => 'Serialization',
        'tenantId' => 'TenantId',
        'timeout' => 'Timeout',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }

        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->authRuleName) {
            $res['AuthRuleName'] = $this->authRuleName;
        }

        if (null !== $this->cacheRuleShrink) {
            $res['CacheRule'] = $this->cacheRuleShrink;
        }

        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->defaultLimitRuleShrink) {
            $res['DefaultLimitRule'] = $this->defaultLimitRuleShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->headerRulesShrink) {
            $res['HeaderRules'] = $this->headerRulesShrink;
        }

        if (null !== $this->interfaceType) {
            $res['InterfaceType'] = $this->interfaceType;
        }

        if (null !== $this->limitRuleShrink) {
            $res['LimitRule'] = $this->limitRuleShrink;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }

        if (null !== $this->migrateRuleShrink) {
            $res['MigrateRule'] = $this->migrateRuleShrink;
        }

        if (null !== $this->mockRuleShrink) {
            $res['MockRule'] = $this->mockRuleShrink;
        }

        if (null !== $this->needEncrypt) {
            $res['NeedEncrypt'] = $this->needEncrypt;
        }

        if (null !== $this->needJsonp) {
            $res['NeedJsonp'] = $this->needJsonp;
        }

        if (null !== $this->needSign) {
            $res['NeedSign'] = $this->needSign;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->requestBodyModel) {
            $res['RequestBodyModel'] = $this->requestBodyModel;
        }

        if (null !== $this->requestParamsShrink) {
            $res['RequestParams'] = $this->requestParamsShrink;
        }

        if (null !== $this->responseBodyModel) {
            $res['ResponseBodyModel'] = $this->responseBodyModel;
        }

        if (null !== $this->rpcParameterTypesShrink) {
            $res['RpcParameterTypes'] = $this->rpcParameterTypesShrink;
        }

        if (null !== $this->serialization) {
            $res['Serialization'] = $this->serialization;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }

        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AuthRuleName'])) {
            $model->authRuleName = $map['AuthRuleName'];
        }

        if (isset($map['CacheRule'])) {
            $model->cacheRuleShrink = $map['CacheRule'];
        }

        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['DefaultLimitRule'])) {
            $model->defaultLimitRuleShrink = $map['DefaultLimitRule'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HeaderRules'])) {
            $model->headerRulesShrink = $map['HeaderRules'];
        }

        if (isset($map['InterfaceType'])) {
            $model->interfaceType = $map['InterfaceType'];
        }

        if (isset($map['LimitRule'])) {
            $model->limitRuleShrink = $map['LimitRule'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }

        if (isset($map['MigrateRule'])) {
            $model->migrateRuleShrink = $map['MigrateRule'];
        }

        if (isset($map['MockRule'])) {
            $model->mockRuleShrink = $map['MockRule'];
        }

        if (isset($map['NeedEncrypt'])) {
            $model->needEncrypt = $map['NeedEncrypt'];
        }

        if (isset($map['NeedJsonp'])) {
            $model->needJsonp = $map['NeedJsonp'];
        }

        if (isset($map['NeedSign'])) {
            $model->needSign = $map['NeedSign'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['RequestBodyModel'])) {
            $model->requestBodyModel = $map['RequestBodyModel'];
        }

        if (isset($map['RequestParams'])) {
            $model->requestParamsShrink = $map['RequestParams'];
        }

        if (isset($map['ResponseBodyModel'])) {
            $model->responseBodyModel = $map['ResponseBodyModel'];
        }

        if (isset($map['RpcParameterTypes'])) {
            $model->rpcParameterTypesShrink = $map['RpcParameterTypes'];
        }

        if (isset($map['Serialization'])) {
            $model->serialization = $map['Serialization'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
