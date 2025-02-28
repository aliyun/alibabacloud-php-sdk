<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class featureConsistencyCheckConfigs extends Model
{
    /**
     * @var bool
     */
    public $compareFeature;
    /**
     * @var string
     */
    public $datasetId;
    /**
     * @var string
     */
    public $datasetMountPath;
    /**
     * @var string
     */
    public $datasetName;
    /**
     * @var string
     */
    public $datasetType;
    /**
     * @var string
     */
    public $datasetUri;
    /**
     * @var string
     */
    public $defaultRoute;
    /**
     * @var string
     */
    public $easServiceName;
    /**
     * @var string
     */
    public $easyRecPackagePath;
    /**
     * @var string
     */
    public $easyRecVersion;
    /**
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;
    /**
     * @var string
     */
    public $featureDisplayExclude;
    /**
     * @var string
     */
    public $featureLandingResourceId;
    /**
     * @var string
     */
    public $featureLandingResourceUri;
    /**
     * @var string
     */
    public $featurePriority;
    /**
     * @var string
     */
    public $featureStoreItemId;
    /**
     * @var string
     */
    public $featureStoreModelId;
    /**
     * @var string
     */
    public $featureStoreProjectId;
    /**
     * @var string
     */
    public $featureStoreProjectName;
    /**
     * @var string
     */
    public $featureStoreSeqFeatureView;
    /**
     * @var string
     */
    public $featureStoreUserId;
    /**
     * @var string
     */
    public $fgJarVersion;
    /**
     * @var string
     */
    public $fgJsonFileName;
    /**
     * @var bool
     */
    public $generateZip;
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var string
     */
    public $gmtModifiedTime;
    /**
     * @var string
     */
    public $itemIdField;
    /**
     * @var string
     */
    public $itemTable;
    /**
     * @var string
     */
    public $itemTablePartitionField;
    /**
     * @var string
     */
    public $itemTablePartitionFieldFormat;
    /**
     * @var string
     */
    public $latestJobGmtSamplingEndTime;
    /**
     * @var string
     */
    public $latestJobGmtSamplingStartTime;
    /**
     * @var string
     */
    public $latestJobId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ossBucket;
    /**
     * @var string
     */
    public $ossResourceId;
    /**
     * @var int
     */
    public $predictWorkerCount;
    /**
     * @var int
     */
    public $predictWorkerCpu;
    /**
     * @var int
     */
    public $predictWorkerMemory;
    /**
     * @var string
     */
    public $sampleRate;
    /**
     * @var string
     */
    public $sceneId;
    /**
     * @var string
     */
    public $sceneName;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $switchId;
    /**
     * @var string
     */
    public $useFeatureStore;
    /**
     * @var string
     */
    public $userIdField;
    /**
     * @var string
     */
    public $userTable;
    /**
     * @var string
     */
    public $userTablePartitionField;
    /**
     * @var string
     */
    public $userTablePartitionFieldFormat;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $workflowName;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'compareFeature'                     => 'CompareFeature',
        'datasetId'                          => 'DatasetId',
        'datasetMountPath'                   => 'DatasetMountPath',
        'datasetName'                        => 'DatasetName',
        'datasetType'                        => 'DatasetType',
        'datasetUri'                         => 'DatasetUri',
        'defaultRoute'                       => 'DefaultRoute',
        'easServiceName'                     => 'EasServiceName',
        'easyRecPackagePath'                 => 'EasyRecPackagePath',
        'easyRecVersion'                     => 'EasyRecVersion',
        'featureConsistencyCheckJobConfigId' => 'FeatureConsistencyCheckJobConfigId',
        'featureDisplayExclude'              => 'FeatureDisplayExclude',
        'featureLandingResourceId'           => 'FeatureLandingResourceId',
        'featureLandingResourceUri'          => 'FeatureLandingResourceUri',
        'featurePriority'                    => 'FeaturePriority',
        'featureStoreItemId'                 => 'FeatureStoreItemId',
        'featureStoreModelId'                => 'FeatureStoreModelId',
        'featureStoreProjectId'              => 'FeatureStoreProjectId',
        'featureStoreProjectName'            => 'FeatureStoreProjectName',
        'featureStoreSeqFeatureView'         => 'FeatureStoreSeqFeatureView',
        'featureStoreUserId'                 => 'FeatureStoreUserId',
        'fgJarVersion'                       => 'FgJarVersion',
        'fgJsonFileName'                     => 'FgJsonFileName',
        'generateZip'                        => 'GenerateZip',
        'gmtCreateTime'                      => 'GmtCreateTime',
        'gmtModifiedTime'                    => 'GmtModifiedTime',
        'itemIdField'                        => 'ItemIdField',
        'itemTable'                          => 'ItemTable',
        'itemTablePartitionField'            => 'ItemTablePartitionField',
        'itemTablePartitionFieldFormat'      => 'ItemTablePartitionFieldFormat',
        'latestJobGmtSamplingEndTime'        => 'LatestJobGmtSamplingEndTime',
        'latestJobGmtSamplingStartTime'      => 'LatestJobGmtSamplingStartTime',
        'latestJobId'                        => 'LatestJobId',
        'name'                               => 'Name',
        'ossBucket'                          => 'OssBucket',
        'ossResourceId'                      => 'OssResourceId',
        'predictWorkerCount'                 => 'PredictWorkerCount',
        'predictWorkerCpu'                   => 'PredictWorkerCpu',
        'predictWorkerMemory'                => 'PredictWorkerMemory',
        'sampleRate'                         => 'SampleRate',
        'sceneId'                            => 'SceneId',
        'sceneName'                          => 'SceneName',
        'securityGroupId'                    => 'SecurityGroupId',
        'serviceId'                          => 'ServiceId',
        'serviceName'                        => 'ServiceName',
        'status'                             => 'Status',
        'switchId'                           => 'SwitchId',
        'useFeatureStore'                    => 'UseFeatureStore',
        'userIdField'                        => 'UserIdField',
        'userTable'                          => 'UserTable',
        'userTablePartitionField'            => 'UserTablePartitionField',
        'userTablePartitionFieldFormat'      => 'UserTablePartitionFieldFormat',
        'vpcId'                              => 'VpcId',
        'workflowName'                       => 'WorkflowName',
        'workspaceId'                        => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compareFeature) {
            $res['CompareFeature'] = $this->compareFeature;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetMountPath) {
            $res['DatasetMountPath'] = $this->datasetMountPath;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->datasetUri) {
            $res['DatasetUri'] = $this->datasetUri;
        }

        if (null !== $this->defaultRoute) {
            $res['DefaultRoute'] = $this->defaultRoute;
        }

        if (null !== $this->easServiceName) {
            $res['EasServiceName'] = $this->easServiceName;
        }

        if (null !== $this->easyRecPackagePath) {
            $res['EasyRecPackagePath'] = $this->easyRecPackagePath;
        }

        if (null !== $this->easyRecVersion) {
            $res['EasyRecVersion'] = $this->easyRecVersion;
        }

        if (null !== $this->featureConsistencyCheckJobConfigId) {
            $res['FeatureConsistencyCheckJobConfigId'] = $this->featureConsistencyCheckJobConfigId;
        }

        if (null !== $this->featureDisplayExclude) {
            $res['FeatureDisplayExclude'] = $this->featureDisplayExclude;
        }

        if (null !== $this->featureLandingResourceId) {
            $res['FeatureLandingResourceId'] = $this->featureLandingResourceId;
        }

        if (null !== $this->featureLandingResourceUri) {
            $res['FeatureLandingResourceUri'] = $this->featureLandingResourceUri;
        }

        if (null !== $this->featurePriority) {
            $res['FeaturePriority'] = $this->featurePriority;
        }

        if (null !== $this->featureStoreItemId) {
            $res['FeatureStoreItemId'] = $this->featureStoreItemId;
        }

        if (null !== $this->featureStoreModelId) {
            $res['FeatureStoreModelId'] = $this->featureStoreModelId;
        }

        if (null !== $this->featureStoreProjectId) {
            $res['FeatureStoreProjectId'] = $this->featureStoreProjectId;
        }

        if (null !== $this->featureStoreProjectName) {
            $res['FeatureStoreProjectName'] = $this->featureStoreProjectName;
        }

        if (null !== $this->featureStoreSeqFeatureView) {
            $res['FeatureStoreSeqFeatureView'] = $this->featureStoreSeqFeatureView;
        }

        if (null !== $this->featureStoreUserId) {
            $res['FeatureStoreUserId'] = $this->featureStoreUserId;
        }

        if (null !== $this->fgJarVersion) {
            $res['FgJarVersion'] = $this->fgJarVersion;
        }

        if (null !== $this->fgJsonFileName) {
            $res['FgJsonFileName'] = $this->fgJsonFileName;
        }

        if (null !== $this->generateZip) {
            $res['GenerateZip'] = $this->generateZip;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->itemIdField) {
            $res['ItemIdField'] = $this->itemIdField;
        }

        if (null !== $this->itemTable) {
            $res['ItemTable'] = $this->itemTable;
        }

        if (null !== $this->itemTablePartitionField) {
            $res['ItemTablePartitionField'] = $this->itemTablePartitionField;
        }

        if (null !== $this->itemTablePartitionFieldFormat) {
            $res['ItemTablePartitionFieldFormat'] = $this->itemTablePartitionFieldFormat;
        }

        if (null !== $this->latestJobGmtSamplingEndTime) {
            $res['LatestJobGmtSamplingEndTime'] = $this->latestJobGmtSamplingEndTime;
        }

        if (null !== $this->latestJobGmtSamplingStartTime) {
            $res['LatestJobGmtSamplingStartTime'] = $this->latestJobGmtSamplingStartTime;
        }

        if (null !== $this->latestJobId) {
            $res['LatestJobId'] = $this->latestJobId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossResourceId) {
            $res['OssResourceId'] = $this->ossResourceId;
        }

        if (null !== $this->predictWorkerCount) {
            $res['PredictWorkerCount'] = $this->predictWorkerCount;
        }

        if (null !== $this->predictWorkerCpu) {
            $res['PredictWorkerCpu'] = $this->predictWorkerCpu;
        }

        if (null !== $this->predictWorkerMemory) {
            $res['PredictWorkerMemory'] = $this->predictWorkerMemory;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        if (null !== $this->useFeatureStore) {
            $res['UseFeatureStore'] = $this->useFeatureStore;
        }

        if (null !== $this->userIdField) {
            $res['UserIdField'] = $this->userIdField;
        }

        if (null !== $this->userTable) {
            $res['UserTable'] = $this->userTable;
        }

        if (null !== $this->userTablePartitionField) {
            $res['UserTablePartitionField'] = $this->userTablePartitionField;
        }

        if (null !== $this->userTablePartitionFieldFormat) {
            $res['UserTablePartitionFieldFormat'] = $this->userTablePartitionFieldFormat;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->workflowName) {
            $res['WorkflowName'] = $this->workflowName;
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
        if (isset($map['CompareFeature'])) {
            $model->compareFeature = $map['CompareFeature'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetMountPath'])) {
            $model->datasetMountPath = $map['DatasetMountPath'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['DatasetUri'])) {
            $model->datasetUri = $map['DatasetUri'];
        }

        if (isset($map['DefaultRoute'])) {
            $model->defaultRoute = $map['DefaultRoute'];
        }

        if (isset($map['EasServiceName'])) {
            $model->easServiceName = $map['EasServiceName'];
        }

        if (isset($map['EasyRecPackagePath'])) {
            $model->easyRecPackagePath = $map['EasyRecPackagePath'];
        }

        if (isset($map['EasyRecVersion'])) {
            $model->easyRecVersion = $map['EasyRecVersion'];
        }

        if (isset($map['FeatureConsistencyCheckJobConfigId'])) {
            $model->featureConsistencyCheckJobConfigId = $map['FeatureConsistencyCheckJobConfigId'];
        }

        if (isset($map['FeatureDisplayExclude'])) {
            $model->featureDisplayExclude = $map['FeatureDisplayExclude'];
        }

        if (isset($map['FeatureLandingResourceId'])) {
            $model->featureLandingResourceId = $map['FeatureLandingResourceId'];
        }

        if (isset($map['FeatureLandingResourceUri'])) {
            $model->featureLandingResourceUri = $map['FeatureLandingResourceUri'];
        }

        if (isset($map['FeaturePriority'])) {
            $model->featurePriority = $map['FeaturePriority'];
        }

        if (isset($map['FeatureStoreItemId'])) {
            $model->featureStoreItemId = $map['FeatureStoreItemId'];
        }

        if (isset($map['FeatureStoreModelId'])) {
            $model->featureStoreModelId = $map['FeatureStoreModelId'];
        }

        if (isset($map['FeatureStoreProjectId'])) {
            $model->featureStoreProjectId = $map['FeatureStoreProjectId'];
        }

        if (isset($map['FeatureStoreProjectName'])) {
            $model->featureStoreProjectName = $map['FeatureStoreProjectName'];
        }

        if (isset($map['FeatureStoreSeqFeatureView'])) {
            $model->featureStoreSeqFeatureView = $map['FeatureStoreSeqFeatureView'];
        }

        if (isset($map['FeatureStoreUserId'])) {
            $model->featureStoreUserId = $map['FeatureStoreUserId'];
        }

        if (isset($map['FgJarVersion'])) {
            $model->fgJarVersion = $map['FgJarVersion'];
        }

        if (isset($map['FgJsonFileName'])) {
            $model->fgJsonFileName = $map['FgJsonFileName'];
        }

        if (isset($map['GenerateZip'])) {
            $model->generateZip = $map['GenerateZip'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['ItemIdField'])) {
            $model->itemIdField = $map['ItemIdField'];
        }

        if (isset($map['ItemTable'])) {
            $model->itemTable = $map['ItemTable'];
        }

        if (isset($map['ItemTablePartitionField'])) {
            $model->itemTablePartitionField = $map['ItemTablePartitionField'];
        }

        if (isset($map['ItemTablePartitionFieldFormat'])) {
            $model->itemTablePartitionFieldFormat = $map['ItemTablePartitionFieldFormat'];
        }

        if (isset($map['LatestJobGmtSamplingEndTime'])) {
            $model->latestJobGmtSamplingEndTime = $map['LatestJobGmtSamplingEndTime'];
        }

        if (isset($map['LatestJobGmtSamplingStartTime'])) {
            $model->latestJobGmtSamplingStartTime = $map['LatestJobGmtSamplingStartTime'];
        }

        if (isset($map['LatestJobId'])) {
            $model->latestJobId = $map['LatestJobId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['OssResourceId'])) {
            $model->ossResourceId = $map['OssResourceId'];
        }

        if (isset($map['PredictWorkerCount'])) {
            $model->predictWorkerCount = $map['PredictWorkerCount'];
        }

        if (isset($map['PredictWorkerCpu'])) {
            $model->predictWorkerCpu = $map['PredictWorkerCpu'];
        }

        if (isset($map['PredictWorkerMemory'])) {
            $model->predictWorkerMemory = $map['PredictWorkerMemory'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        if (isset($map['UseFeatureStore'])) {
            $model->useFeatureStore = $map['UseFeatureStore'];
        }

        if (isset($map['UserIdField'])) {
            $model->userIdField = $map['UserIdField'];
        }

        if (isset($map['UserTable'])) {
            $model->userTable = $map['UserTable'];
        }

        if (isset($map['UserTablePartitionField'])) {
            $model->userTablePartitionField = $map['UserTablePartitionField'];
        }

        if (isset($map['UserTablePartitionFieldFormat'])) {
            $model->userTablePartitionFieldFormat = $map['UserTablePartitionFieldFormat'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WorkflowName'])) {
            $model->workflowName = $map['WorkflowName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
