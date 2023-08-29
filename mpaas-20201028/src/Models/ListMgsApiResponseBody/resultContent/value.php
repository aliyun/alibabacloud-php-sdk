<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\apiInvoker;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\cacheRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\circuitBreakerRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\headerRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\headerRules;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\limitRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\migrateRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\mockRule;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\requestParams;
use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @var apiInvoker
     */
    public $apiInvoker;

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
     * @var circuitBreakerRule
     */
    public $circuitBreakerRule;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var headerRule[]
     */
    public $headerRule;

    /**
     * @var headerRules[]
     */
    public $headerRules;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $id;

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
     * @var string
     */
    public $needETag;

    /**
     * @var string
     */
    public $needEncrypt;

    /**
     * @var string
     */
    public $needJsonp;

    /**
     * @var string
     */
    public $needSign;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $paramGetMethod;

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
     * @var int
     */
    public $sysId;

    /**
     * @var string
     */
    public $sysName;

    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiInvoker'         => 'ApiInvoker',
        'apiName'            => 'ApiName',
        'apiStatus'          => 'ApiStatus',
        'apiType'            => 'ApiType',
        'appId'              => 'AppId',
        'authRuleName'       => 'AuthRuleName',
        'cacheRule'          => 'CacheRule',
        'charset'            => 'Charset',
        'circuitBreakerRule' => 'CircuitBreakerRule',
        'contentType'        => 'ContentType',
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'headerRule'         => 'HeaderRule',
        'headerRules'        => 'HeaderRules',
        'host'               => 'Host',
        'id'                 => 'Id',
        'interfaceType'      => 'InterfaceType',
        'limitRule'          => 'LimitRule',
        'method'             => 'Method',
        'methodName'         => 'MethodName',
        'migrateRule'        => 'MigrateRule',
        'mockRule'           => 'MockRule',
        'needETag'           => 'NeedETag',
        'needEncrypt'        => 'NeedEncrypt',
        'needJsonp'          => 'NeedJsonp',
        'needSign'           => 'NeedSign',
        'operationType'      => 'OperationType',
        'paramGetMethod'     => 'ParamGetMethod',
        'path'               => 'Path',
        'requestBodyModel'   => 'RequestBodyModel',
        'requestParams'      => 'RequestParams',
        'responseBodyModel'  => 'ResponseBodyModel',
        'sysId'              => 'SysId',
        'sysName'            => 'SysName',
        'timeout'            => 'Timeout',
        'workspaceId'        => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiInvoker) {
            $res['ApiInvoker'] = null !== $this->apiInvoker ? $this->apiInvoker->toMap() : null;
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
            $res['CacheRule'] = null !== $this->cacheRule ? $this->cacheRule->toMap() : null;
        }
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->circuitBreakerRule) {
            $res['CircuitBreakerRule'] = null !== $this->circuitBreakerRule ? $this->circuitBreakerRule->toMap() : null;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->headerRule) {
            $res['HeaderRule'] = [];
            if (null !== $this->headerRule && \is_array($this->headerRule)) {
                $n = 0;
                foreach ($this->headerRule as $item) {
                    $res['HeaderRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->headerRules) {
            $res['HeaderRules'] = [];
            if (null !== $this->headerRules && \is_array($this->headerRules)) {
                $n = 0;
                foreach ($this->headerRules as $item) {
                    $res['HeaderRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->interfaceType) {
            $res['InterfaceType'] = $this->interfaceType;
        }
        if (null !== $this->limitRule) {
            $res['LimitRule'] = null !== $this->limitRule ? $this->limitRule->toMap() : null;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->migrateRule) {
            $res['MigrateRule'] = null !== $this->migrateRule ? $this->migrateRule->toMap() : null;
        }
        if (null !== $this->mockRule) {
            $res['MockRule'] = null !== $this->mockRule ? $this->mockRule->toMap() : null;
        }
        if (null !== $this->needETag) {
            $res['NeedETag'] = $this->needETag;
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
        if (null !== $this->paramGetMethod) {
            $res['ParamGetMethod'] = $this->paramGetMethod;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->requestBodyModel) {
            $res['RequestBodyModel'] = $this->requestBodyModel;
        }
        if (null !== $this->requestParams) {
            $res['RequestParams'] = [];
            if (null !== $this->requestParams && \is_array($this->requestParams)) {
                $n = 0;
                foreach ($this->requestParams as $item) {
                    $res['RequestParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->responseBodyModel) {
            $res['ResponseBodyModel'] = $this->responseBodyModel;
        }
        if (null !== $this->sysId) {
            $res['SysId'] = $this->sysId;
        }
        if (null !== $this->sysName) {
            $res['SysName'] = $this->sysName;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return value
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiInvoker'])) {
            $model->apiInvoker = apiInvoker::fromMap($map['ApiInvoker']);
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
        if (isset($map['CircuitBreakerRule'])) {
            $model->circuitBreakerRule = circuitBreakerRule::fromMap($map['CircuitBreakerRule']);
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HeaderRule'])) {
            if (!empty($map['HeaderRule'])) {
                $model->headerRule = [];
                $n                 = 0;
                foreach ($map['HeaderRule'] as $item) {
                    $model->headerRule[$n++] = null !== $item ? headerRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HeaderRules'])) {
            if (!empty($map['HeaderRules'])) {
                $model->headerRules = [];
                $n                  = 0;
                foreach ($map['HeaderRules'] as $item) {
                    $model->headerRules[$n++] = null !== $item ? headerRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['NeedETag'])) {
            $model->needETag = $map['NeedETag'];
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
        if (isset($map['ParamGetMethod'])) {
            $model->paramGetMethod = $map['ParamGetMethod'];
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
                $n                    = 0;
                foreach ($map['RequestParams'] as $item) {
                    $model->requestParams[$n++] = null !== $item ? requestParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResponseBodyModel'])) {
            $model->responseBodyModel = $map['ResponseBodyModel'];
        }
        if (isset($map['SysId'])) {
            $model->sysId = $map['SysId'];
        }
        if (isset($map['SysName'])) {
            $model->sysName = $map['SysName'];
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
