<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiDocumentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiDocumentResponseBody\data\apiRegisterInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiDocumentResponseBody\data\publicParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiDocumentResponseBody\data\requestParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiDocumentResponseBody\data\responseParamList;

class data extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var apiRegisterInfo
     */
    public $apiRegisterInfo;

    /**
     * @var int
     */
    public $apiTimeout;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var string
     */
    public $cacheTime;

    /**
     * @var int
     */
    public $createType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $directDatasourceId;

    /**
     * @var string
     */
    public $directDatasourceName;

    /**
     * @var int
     */
    public $env;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $isLogicalTable;

    /**
     * @var bool
     */
    public $isPagedQuery;

    /**
     * @var bool
     */
    public $isSpecialSql;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $openCache;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $protocol;

    /**
     * @var publicParamList[]
     */
    public $publicParamList;

    /**
     * @var int
     */
    public $requestMethod;

    /**
     * @var requestParamList[]
     */
    public $requestParamList;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var responseParamList[]
     */
    public $responseParamList;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var int
     */
    public $returnLimit;

    /**
     * @var int
     */
    public $returnType;

    /**
     * @var string
     */
    public $scriptType;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $timeout;

    /**
     * @var int
     */
    public $updateRate;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiRegisterInfo' => 'ApiRegisterInfo',
        'apiTimeout' => 'ApiTimeout',
        'bizUnitName' => 'BizUnitName',
        'cacheTime' => 'CacheTime',
        'createType' => 'CreateType',
        'description' => 'Description',
        'directDatasourceId' => 'DirectDatasourceId',
        'directDatasourceName' => 'DirectDatasourceName',
        'env' => 'Env',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'isLogicalTable' => 'IsLogicalTable',
        'isPagedQuery' => 'IsPagedQuery',
        'isSpecialSql' => 'IsSpecialSql',
        'mode' => 'Mode',
        'name' => 'Name',
        'openCache' => 'OpenCache',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'protocol' => 'Protocol',
        'publicParamList' => 'PublicParamList',
        'requestMethod' => 'RequestMethod',
        'requestParamList' => 'RequestParamList',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
        'responseParamList' => 'ResponseParamList',
        'resultSample' => 'ResultSample',
        'returnLimit' => 'ReturnLimit',
        'returnType' => 'ReturnType',
        'scriptType' => 'ScriptType',
        'sql' => 'Sql',
        'tableName' => 'TableName',
        'timeout' => 'Timeout',
        'updateRate' => 'UpdateRate',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->apiRegisterInfo) {
            $this->apiRegisterInfo->validate();
        }
        if (\is_array($this->publicParamList)) {
            Model::validateArray($this->publicParamList);
        }
        if (\is_array($this->requestParamList)) {
            Model::validateArray($this->requestParamList);
        }
        if (\is_array($this->responseParamList)) {
            Model::validateArray($this->responseParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiRegisterInfo) {
            $res['ApiRegisterInfo'] = null !== $this->apiRegisterInfo ? $this->apiRegisterInfo->toArray($noStream) : $this->apiRegisterInfo;
        }

        if (null !== $this->apiTimeout) {
            $res['ApiTimeout'] = $this->apiTimeout;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->cacheTime) {
            $res['CacheTime'] = $this->cacheTime;
        }

        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directDatasourceId) {
            $res['DirectDatasourceId'] = $this->directDatasourceId;
        }

        if (null !== $this->directDatasourceName) {
            $res['DirectDatasourceName'] = $this->directDatasourceName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->isLogicalTable) {
            $res['IsLogicalTable'] = $this->isLogicalTable;
        }

        if (null !== $this->isPagedQuery) {
            $res['IsPagedQuery'] = $this->isPagedQuery;
        }

        if (null !== $this->isSpecialSql) {
            $res['IsSpecialSql'] = $this->isSpecialSql;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->openCache) {
            $res['OpenCache'] = $this->openCache;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->publicParamList) {
            if (\is_array($this->publicParamList)) {
                $res['PublicParamList'] = [];
                $n1 = 0;
                foreach ($this->publicParamList as $item1) {
                    $res['PublicParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }

        if (null !== $this->requestParamList) {
            if (\is_array($this->requestParamList)) {
                $res['RequestParamList'] = [];
                $n1 = 0;
                foreach ($this->requestParamList as $item1) {
                    $res['RequestParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->responseParamList) {
            if (\is_array($this->responseParamList)) {
                $res['ResponseParamList'] = [];
                $n1 = 0;
                foreach ($this->responseParamList as $item1) {
                    $res['ResponseParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }

        if (null !== $this->returnLimit) {
            $res['ReturnLimit'] = $this->returnLimit;
        }

        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }

        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->updateRate) {
            $res['UpdateRate'] = $this->updateRate;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['ApiRegisterInfo'])) {
            $model->apiRegisterInfo = apiRegisterInfo::fromMap($map['ApiRegisterInfo']);
        }

        if (isset($map['ApiTimeout'])) {
            $model->apiTimeout = $map['ApiTimeout'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['CacheTime'])) {
            $model->cacheTime = $map['CacheTime'];
        }

        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DirectDatasourceId'])) {
            $model->directDatasourceId = $map['DirectDatasourceId'];
        }

        if (isset($map['DirectDatasourceName'])) {
            $model->directDatasourceName = $map['DirectDatasourceName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IsLogicalTable'])) {
            $model->isLogicalTable = $map['IsLogicalTable'];
        }

        if (isset($map['IsPagedQuery'])) {
            $model->isPagedQuery = $map['IsPagedQuery'];
        }

        if (isset($map['IsSpecialSql'])) {
            $model->isSpecialSql = $map['IsSpecialSql'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OpenCache'])) {
            $model->openCache = $map['OpenCache'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['PublicParamList'])) {
            if (!empty($map['PublicParamList'])) {
                $model->publicParamList = [];
                $n1 = 0;
                foreach ($map['PublicParamList'] as $item1) {
                    $model->publicParamList[$n1] = publicParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }

        if (isset($map['RequestParamList'])) {
            if (!empty($map['RequestParamList'])) {
                $model->requestParamList = [];
                $n1 = 0;
                foreach ($map['RequestParamList'] as $item1) {
                    $model->requestParamList[$n1] = requestParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['ResponseParamList'])) {
            if (!empty($map['ResponseParamList'])) {
                $model->responseParamList = [];
                $n1 = 0;
                foreach ($map['ResponseParamList'] as $item1) {
                    $model->responseParamList[$n1] = responseParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }

        if (isset($map['ReturnLimit'])) {
            $model->returnLimit = $map['ReturnLimit'];
        }

        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }

        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['UpdateRate'])) {
            $model->updateRate = $map['UpdateRate'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
