<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data\publicParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data\registerApi;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data\requestParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data\responseParamList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 987654321
     *
     * @var int
     */
    public $apiNo;

    /**
     * @example 30
     *
     * @var int
     */
    public $apiTimeout;

    /**
     * @example exampleApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example exampleModule
     *
     * @var string
     */
    public $bizModuleEnName;

    /**
     * @example 1
     *
     * @var string
     */
    public $cacheSwitch;

    /**
     * @example 60
     *
     * @var string
     */
    public $cacheTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $createType;

    /**
     * @example 0
     *
     * @var int
     */
    public $dbEnv;

    /**
     * @example 这是一个示例API
     *
     * @var string
     */
    public $description;

    /**
     * @example 54321
     *
     * @var int
     */
    public $directDatasourceId;

    /**
     * @example directDatasource
     *
     * @var string
     */
    public $directDatasourceName;

    /**
     * @example 67890
     *
     * @var int
     */
    public $groupId;

    /**
     * @example exampleGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isLogicalTable;

    /**
     * @example 0
     *
     * @var int
     */
    public $isPagedQuery;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxReturnNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $modelType;

    /**
     * @example exampleApi
     *
     * @var string
     */
    public $name;

    /**
     * @example 112233
     *
     * @var int
     */
    public $projId;

    /**
     * @example exampleProject
     *
     * @var string
     */
    public $projName;

    /**
     * @example 3
     *
     * @var int
     */
    public $protocol;

    /**
     * @example HTTP和HTTPS
     *
     * @var string
     */
    public $protocolName;

    /**
     * @description -
     *
     * @var publicParamList[]
     */
    public $publicParamList;

    /**
     * @var registerApi
     */
    public $registerApi;

    /**
     * @example 1
     *
     * @var int
     */
    public $requestMethod;

    /**
     * @example GET
     *
     * @var string
     */
    public $requestMethodName;

    /**
     * @description -
     *
     * @var requestParamList[]
     */
    public $requestParamList;

    /**
     * @example exampleResourceGroup
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description -
     *
     * @var responseParamList[]
     */
    public $responseParamList;

    /**
     * @example {"status":"success","data":[]}
     *
     * @var string
     */
    public $resultSample;

    /**
     * @example 3
     *
     * @var int
     */
    public $returnType;

    /**
     * @example JSON
     *
     * @var string
     */
    public $returnTypeName;

    /**
     * @example grp12345
     *
     * @var string
     */
    public $rsGrpId;

    /**
     * @example SQL
     *
     * @var string
     */
    public $scriptType;

    /**
     * @example 0
     *
     * @var int
     */
    public $specialSql;

    /**
     * @example SELECT * FROM example_table
     *
     * @var string
     */
    public $sqlStatement;

    /**
     * @example exampleTable
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 10
     *
     * @var string
     */
    public $timeout;

    /**
     * @example 2
     *
     * @var int
     */
    public $updateRate;

    /**
     * @example 每日更新
     *
     * @var string
     */
    public $updateRateName;

    /**
     * @example v1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'apiNo' => 'ApiNo',
        'apiTimeout' => 'ApiTimeout',
        'appName' => 'AppName',
        'bizModuleEnName' => 'BizModuleEnName',
        'cacheSwitch' => 'CacheSwitch',
        'cacheTime' => 'CacheTime',
        'createType' => 'CreateType',
        'dbEnv' => 'DbEnv',
        'description' => 'Description',
        'directDatasourceId' => 'DirectDatasourceId',
        'directDatasourceName' => 'DirectDatasourceName',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'id' => 'Id',
        'isLogicalTable' => 'IsLogicalTable',
        'isPagedQuery' => 'IsPagedQuery',
        'maxReturnNum' => 'MaxReturnNum',
        'modelType' => 'ModelType',
        'name' => 'Name',
        'projId' => 'ProjId',
        'projName' => 'ProjName',
        'protocol' => 'Protocol',
        'protocolName' => 'ProtocolName',
        'publicParamList' => 'PublicParamList',
        'registerApi' => 'RegisterApi',
        'requestMethod' => 'RequestMethod',
        'requestMethodName' => 'RequestMethodName',
        'requestParamList' => 'RequestParamList',
        'resourceGroupName' => 'ResourceGroupName',
        'responseParamList' => 'ResponseParamList',
        'resultSample' => 'ResultSample',
        'returnType' => 'ReturnType',
        'returnTypeName' => 'ReturnTypeName',
        'rsGrpId' => 'RsGrpId',
        'scriptType' => 'ScriptType',
        'specialSql' => 'SpecialSql',
        'sqlStatement' => 'SqlStatement',
        'tableName' => 'TableName',
        'timeout' => 'Timeout',
        'updateRate' => 'UpdateRate',
        'updateRateName' => 'UpdateRateName',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiNo) {
            $res['ApiNo'] = $this->apiNo;
        }
        if (null !== $this->apiTimeout) {
            $res['ApiTimeout'] = $this->apiTimeout;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizModuleEnName) {
            $res['BizModuleEnName'] = $this->bizModuleEnName;
        }
        if (null !== $this->cacheSwitch) {
            $res['CacheSwitch'] = $this->cacheSwitch;
        }
        if (null !== $this->cacheTime) {
            $res['CacheTime'] = $this->cacheTime;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->dbEnv) {
            $res['DbEnv'] = $this->dbEnv;
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isLogicalTable) {
            $res['IsLogicalTable'] = $this->isLogicalTable;
        }
        if (null !== $this->isPagedQuery) {
            $res['IsPagedQuery'] = $this->isPagedQuery;
        }
        if (null !== $this->maxReturnNum) {
            $res['MaxReturnNum'] = $this->maxReturnNum;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projId) {
            $res['ProjId'] = $this->projId;
        }
        if (null !== $this->projName) {
            $res['ProjName'] = $this->projName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->publicParamList) {
            $res['PublicParamList'] = [];
            if (null !== $this->publicParamList && \is_array($this->publicParamList)) {
                $n = 0;
                foreach ($this->publicParamList as $item) {
                    $res['PublicParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->registerApi) {
            $res['RegisterApi'] = null !== $this->registerApi ? $this->registerApi->toMap() : null;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->requestMethodName) {
            $res['RequestMethodName'] = $this->requestMethodName;
        }
        if (null !== $this->requestParamList) {
            $res['RequestParamList'] = [];
            if (null !== $this->requestParamList && \is_array($this->requestParamList)) {
                $n = 0;
                foreach ($this->requestParamList as $item) {
                    $res['RequestParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->responseParamList) {
            $res['ResponseParamList'] = [];
            if (null !== $this->responseParamList && \is_array($this->responseParamList)) {
                $n = 0;
                foreach ($this->responseParamList as $item) {
                    $res['ResponseParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }
        if (null !== $this->returnTypeName) {
            $res['ReturnTypeName'] = $this->returnTypeName;
        }
        if (null !== $this->rsGrpId) {
            $res['RsGrpId'] = $this->rsGrpId;
        }
        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }
        if (null !== $this->specialSql) {
            $res['SpecialSql'] = $this->specialSql;
        }
        if (null !== $this->sqlStatement) {
            $res['SqlStatement'] = $this->sqlStatement;
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
        if (null !== $this->updateRateName) {
            $res['UpdateRateName'] = $this->updateRateName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiNo'])) {
            $model->apiNo = $map['ApiNo'];
        }
        if (isset($map['ApiTimeout'])) {
            $model->apiTimeout = $map['ApiTimeout'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizModuleEnName'])) {
            $model->bizModuleEnName = $map['BizModuleEnName'];
        }
        if (isset($map['CacheSwitch'])) {
            $model->cacheSwitch = $map['CacheSwitch'];
        }
        if (isset($map['CacheTime'])) {
            $model->cacheTime = $map['CacheTime'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['DbEnv'])) {
            $model->dbEnv = $map['DbEnv'];
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsLogicalTable'])) {
            $model->isLogicalTable = $map['IsLogicalTable'];
        }
        if (isset($map['IsPagedQuery'])) {
            $model->isPagedQuery = $map['IsPagedQuery'];
        }
        if (isset($map['MaxReturnNum'])) {
            $model->maxReturnNum = $map['MaxReturnNum'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjId'])) {
            $model->projId = $map['ProjId'];
        }
        if (isset($map['ProjName'])) {
            $model->projName = $map['ProjName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['PublicParamList'])) {
            if (!empty($map['PublicParamList'])) {
                $model->publicParamList = [];
                $n = 0;
                foreach ($map['PublicParamList'] as $item) {
                    $model->publicParamList[$n++] = null !== $item ? publicParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegisterApi'])) {
            $model->registerApi = registerApi::fromMap($map['RegisterApi']);
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['RequestMethodName'])) {
            $model->requestMethodName = $map['RequestMethodName'];
        }
        if (isset($map['RequestParamList'])) {
            if (!empty($map['RequestParamList'])) {
                $model->requestParamList = [];
                $n = 0;
                foreach ($map['RequestParamList'] as $item) {
                    $model->requestParamList[$n++] = null !== $item ? requestParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['ResponseParamList'])) {
            if (!empty($map['ResponseParamList'])) {
                $model->responseParamList = [];
                $n = 0;
                foreach ($map['ResponseParamList'] as $item) {
                    $model->responseParamList[$n++] = null !== $item ? responseParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }
        if (isset($map['ReturnTypeName'])) {
            $model->returnTypeName = $map['ReturnTypeName'];
        }
        if (isset($map['RsGrpId'])) {
            $model->rsGrpId = $map['RsGrpId'];
        }
        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }
        if (isset($map['SpecialSql'])) {
            $model->specialSql = $map['SpecialSql'];
        }
        if (isset($map['SqlStatement'])) {
            $model->sqlStatement = $map['SqlStatement'];
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
        if (isset($map['UpdateRateName'])) {
            $model->updateRateName = $map['UpdateRateName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
