<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class UpdateFeatureConsistencyCheckJobConfigRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $compareFeature;

    /**
     * @example service_123
     *
     * @var string
     */
    public $easServiceName;

    /**
     * @example oss://********
     *
     * @var string
     */
    public $easyRecPackagePath;

    /**
     * @example 1.3.60
     *
     * @var string
     */
    public $easyRecVersion;

    /**
     * @example feature1,feature2
     *
     * @var string
     */
    public $featureDisplayExclude;

    /**
     * @example reso-********
     *
     * @var string
     */
    public $featureLandingResourceId;

    /**
     * @example feature1,feature2,feature3
     *
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
     * @example 1.0.0
     *
     * @var string
     */
    public $fgJarVersion;

    /**
     * @example file.json
     *
     * @var string
     */
    public $fgJsonFileName;

    /**
     * @example true
     *
     * @var bool
     */
    public $generateZip;

    /**
     * @example pairec-cn-********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isUseFeatureStore;

    /**
     * @example item_id
     *
     * @var string
     */
    public $itemIdField;

    /**
     * @example item_table
     *
     * @var string
     */
    public $itemTable;

    /**
     * @example ds
     *
     * @var string
     */
    public $itemTablePartitionField;

    /**
     * @example yyyymmdd
     *
     * @var string
     */
    public $itemTablePartitionFieldFormat;

    /**
     * @example feature_consistency_check1
     *
     * @var string
     */
    public $name;

    /**
     * @example reso-********
     *
     * @var string
     */
    public $ossResourceId;

    /**
     * @example 0.89
     *
     * @var float
     */
    public $sampleRate;

    /**
     * @example 3
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 4
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example user_id
     *
     * @var string
     */
    public $userIdField;

    /**
     * @example user_table
     *
     * @var string
     */
    public $userTable;

    /**
     * @example ds
     *
     * @var string
     */
    public $userTablePartitionField;

    /**
     * @example yyyymmdd
     *
     * @var string
     */
    public $userTablePartitionFieldFormat;

    /**
     * @example work_flow_1
     *
     * @var string
     */
    public $workflowName;
    protected $_name = [
        'compareFeature'                => 'CompareFeature',
        'easServiceName'                => 'EasServiceName',
        'easyRecPackagePath'            => 'EasyRecPackagePath',
        'easyRecVersion'                => 'EasyRecVersion',
        'featureDisplayExclude'         => 'FeatureDisplayExclude',
        'featureLandingResourceId'      => 'FeatureLandingResourceId',
        'featurePriority'               => 'FeaturePriority',
        'featureStoreItemId'            => 'FeatureStoreItemId',
        'featureStoreModelId'           => 'FeatureStoreModelId',
        'featureStoreProjectId'         => 'FeatureStoreProjectId',
        'featureStoreProjectName'       => 'FeatureStoreProjectName',
        'featureStoreSeqFeatureView'    => 'FeatureStoreSeqFeatureView',
        'featureStoreUserId'            => 'FeatureStoreUserId',
        'fgJarVersion'                  => 'FgJarVersion',
        'fgJsonFileName'                => 'FgJsonFileName',
        'generateZip'                   => 'GenerateZip',
        'instanceId'                    => 'InstanceId',
        'isUseFeatureStore'             => 'IsUseFeatureStore',
        'itemIdField'                   => 'ItemIdField',
        'itemTable'                     => 'ItemTable',
        'itemTablePartitionField'       => 'ItemTablePartitionField',
        'itemTablePartitionFieldFormat' => 'ItemTablePartitionFieldFormat',
        'name'                          => 'Name',
        'ossResourceId'                 => 'OssResourceId',
        'sampleRate'                    => 'SampleRate',
        'sceneId'                       => 'SceneId',
        'serviceId'                     => 'ServiceId',
        'userIdField'                   => 'UserIdField',
        'userTable'                     => 'UserTable',
        'userTablePartitionField'       => 'UserTablePartitionField',
        'userTablePartitionFieldFormat' => 'UserTablePartitionFieldFormat',
        'workflowName'                  => 'WorkflowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compareFeature) {
            $res['CompareFeature'] = $this->compareFeature;
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
        if (null !== $this->featureDisplayExclude) {
            $res['FeatureDisplayExclude'] = $this->featureDisplayExclude;
        }
        if (null !== $this->featureLandingResourceId) {
            $res['FeatureLandingResourceId'] = $this->featureLandingResourceId;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isUseFeatureStore) {
            $res['IsUseFeatureStore'] = $this->isUseFeatureStore;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossResourceId) {
            $res['OssResourceId'] = $this->ossResourceId;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
        if (null !== $this->workflowName) {
            $res['WorkflowName'] = $this->workflowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFeatureConsistencyCheckJobConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompareFeature'])) {
            $model->compareFeature = $map['CompareFeature'];
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
        if (isset($map['FeatureDisplayExclude'])) {
            $model->featureDisplayExclude = $map['FeatureDisplayExclude'];
        }
        if (isset($map['FeatureLandingResourceId'])) {
            $model->featureLandingResourceId = $map['FeatureLandingResourceId'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsUseFeatureStore'])) {
            $model->isUseFeatureStore = $map['IsUseFeatureStore'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssResourceId'])) {
            $model->ossResourceId = $map['OssResourceId'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
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
        if (isset($map['WorkflowName'])) {
            $model->workflowName = $map['WorkflowName'];
        }

        return $model;
    }
}
