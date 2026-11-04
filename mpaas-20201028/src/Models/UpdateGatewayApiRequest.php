<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest\cacheRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest\defaultLimitRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest\headerRules;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest\limitRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest\migrateRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest\mockRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest\requestParams;

class UpdateGatewayApiRequest extends Model
{
    /**
     * @var int
     */
    public $apiId;

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
     * @var cacheRule
     */
    public $cacheRule;

    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var defaultLimitRule
     */
    public $defaultLimitRule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var headerRules[]
     */
    public $headerRules;

    /**
     * @var string
     */
    public $interfaceType;

    /**
     * @var limitRule
     */
    public $limitRule;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var migrateRule
     */
    public $migrateRule;

    /**
     * @var mockRule
     */
    public $mockRule;

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
     * @var requestParams[]
     */
    public $requestParams;

    /**
     * @var string
     */
    public $responseBodyModel;

    /**
     * @var string[]
     */
    public $rpcParameterTypes;

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
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'apiStatus' => 'ApiStatus',
        'apiType' => 'ApiType',
        'appId' => 'AppId',
        'authRuleName' => 'AuthRuleName',
        'cacheRule' => 'CacheRule',
        'charset' => 'Charset',
        'contentType' => 'ContentType',
        'defaultLimitRule' => 'DefaultLimitRule',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'headerRules' => 'HeaderRules',
        'interfaceType' => 'InterfaceType',
        'limitRule' => 'LimitRule',
        'method' => 'Method',
        'methodName' => 'MethodName',
        'migrateRule' => 'MigrateRule',
        'mockRule' => 'MockRule',
        'needEncrypt' => 'NeedEncrypt',
        'needJsonp' => 'NeedJsonp',
        'needSign' => 'NeedSign',
        'operationType' => 'OperationType',
        'path' => 'Path',
        'requestBodyModel' => 'RequestBodyModel',
        'requestParams' => 'RequestParams',
        'responseBodyModel' => 'ResponseBodyModel',
        'rpcParameterTypes' => 'RpcParameterTypes',
        'serialization' => 'Serialization',
        'tenantId' => 'TenantId',
        'timeout' => 'Timeout',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->cacheRule) {
            $this->cacheRule->validate();
        }
        if (null !== $this->defaultLimitRule) {
            $this->defaultLimitRule->validate();
        }
        if (\is_array($this->headerRules)) {
            Model::validateArray($this->headerRules);
        }
        if (null !== $this->limitRule) {
            $this->limitRule->validate();
        }
        if (null !== $this->migrateRule) {
            $this->migrateRule->validate();
        }
        if (null !== $this->mockRule) {
            $this->mockRule->validate();
        }
        if (\is_array($this->requestParams)) {
            Model::validateArray($this->requestParams);
        }
        if (\is_array($this->rpcParameterTypes)) {
            Model::validateArray($this->rpcParameterTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

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

        if (null !== $this->cacheRule) {
            $res['CacheRule'] = null !== $this->cacheRule ? $this->cacheRule->toArray($noStream) : $this->cacheRule;
        }

        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->defaultLimitRule) {
            $res['DefaultLimitRule'] = null !== $this->defaultLimitRule ? $this->defaultLimitRule->toArray($noStream) : $this->defaultLimitRule;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->headerRules) {
            if (\is_array($this->headerRules)) {
                $res['HeaderRules'] = [];
                $n1 = 0;
                foreach ($this->headerRules as $item1) {
                    $res['HeaderRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->interfaceType) {
            $res['InterfaceType'] = $this->interfaceType;
        }

        if (null !== $this->limitRule) {
            $res['LimitRule'] = null !== $this->limitRule ? $this->limitRule->toArray($noStream) : $this->limitRule;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }

        if (null !== $this->migrateRule) {
            $res['MigrateRule'] = null !== $this->migrateRule ? $this->migrateRule->toArray($noStream) : $this->migrateRule;
        }

        if (null !== $this->mockRule) {
            $res['MockRule'] = null !== $this->mockRule ? $this->mockRule->toArray($noStream) : $this->mockRule;
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

        if (null !== $this->requestParams) {
            if (\is_array($this->requestParams)) {
                $res['RequestParams'] = [];
                $n1 = 0;
                foreach ($this->requestParams as $item1) {
                    $res['RequestParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseBodyModel) {
            $res['ResponseBodyModel'] = $this->responseBodyModel;
        }

        if (null !== $this->rpcParameterTypes) {
            if (\is_array($this->rpcParameterTypes)) {
                $res['RpcParameterTypes'] = [];
                $n1 = 0;
                foreach ($this->rpcParameterTypes as $item1) {
                    $res['RpcParameterTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

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
            $model->cacheRule = cacheRule::fromMap($map['CacheRule']);
        }

        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['DefaultLimitRule'])) {
            $model->defaultLimitRule = defaultLimitRule::fromMap($map['DefaultLimitRule']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HeaderRules'])) {
            if (!empty($map['HeaderRules'])) {
                $model->headerRules = [];
                $n1 = 0;
                foreach ($map['HeaderRules'] as $item1) {
                    $model->headerRules[$n1] = headerRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InterfaceType'])) {
            $model->interfaceType = $map['InterfaceType'];
        }

        if (isset($map['LimitRule'])) {
            $model->limitRule = limitRule::fromMap($map['LimitRule']);
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }

        if (isset($map['MigrateRule'])) {
            $model->migrateRule = migrateRule::fromMap($map['MigrateRule']);
        }

        if (isset($map['MockRule'])) {
            $model->mockRule = mockRule::fromMap($map['MockRule']);
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
            if (!empty($map['RequestParams'])) {
                $model->requestParams = [];
                $n1 = 0;
                foreach ($map['RequestParams'] as $item1) {
                    $model->requestParams[$n1] = requestParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResponseBodyModel'])) {
            $model->responseBodyModel = $map['ResponseBodyModel'];
        }

        if (isset($map['RpcParameterTypes'])) {
            if (!empty($map['RpcParameterTypes'])) {
                $model->rpcParameterTypes = [];
                $n1 = 0;
                foreach ($map['RpcParameterTypes'] as $item1) {
                    $model->rpcParameterTypes[$n1] = $item1;
                    ++$n1;
                }
            }
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
