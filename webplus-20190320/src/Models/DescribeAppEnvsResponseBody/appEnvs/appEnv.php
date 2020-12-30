<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvsResponseBody\appEnvs;

use AlibabaCloud\Tea\Model;

class appEnv extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $totalInstances;

    /**
     * @var string
     */
    public $pkgVersionStorageKey;

    /**
     * @var string
     */
    public $latestChangeId;

    /**
     * @var string
     */
    public $envStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $lastEnvStatus;

    /**
     * @var string
     */
    public $pkgVersionId;

    /**
     * @var string
     */
    public $envDescription;

    /**
     * @var bool
     */
    public $applyingChange;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $createUsername;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataRoot;

    /**
     * @var string
     */
    public $storageBase;

    /**
     * @var string
     */
    public $updateUsername;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $logBase;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var bool
     */
    public $usingSharedStorage;

    /**
     * @var string
     */
    public $changeBanner;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $pkgVersionLabel;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var bool
     */
    public $abortingChange;
    protected $_name = [
        'updateTime'           => 'UpdateTime',
        'totalInstances'       => 'TotalInstances',
        'pkgVersionStorageKey' => 'PkgVersionStorageKey',
        'latestChangeId'       => 'LatestChangeId',
        'envStatus'            => 'EnvStatus',
        'createTime'           => 'CreateTime',
        'lastEnvStatus'        => 'LastEnvStatus',
        'pkgVersionId'         => 'PkgVersionId',
        'envDescription'       => 'EnvDescription',
        'applyingChange'       => 'ApplyingChange',
        'envType'              => 'EnvType',
        'appName'              => 'AppName',
        'createUsername'       => 'CreateUsername',
        'appId'                => 'AppId',
        'dataRoot'             => 'DataRoot',
        'storageBase'          => 'StorageBase',
        'updateUsername'       => 'UpdateUsername',
        'envName'              => 'EnvName',
        'logBase'              => 'LogBase',
        'stackName'            => 'StackName',
        'categoryName'         => 'CategoryName',
        'usingSharedStorage'   => 'UsingSharedStorage',
        'changeBanner'         => 'ChangeBanner',
        'stackId'              => 'StackId',
        'pkgVersionLabel'      => 'PkgVersionLabel',
        'envId'                => 'EnvId',
        'abortingChange'       => 'AbortingChange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->totalInstances) {
            $res['TotalInstances'] = $this->totalInstances;
        }
        if (null !== $this->pkgVersionStorageKey) {
            $res['PkgVersionStorageKey'] = $this->pkgVersionStorageKey;
        }
        if (null !== $this->latestChangeId) {
            $res['LatestChangeId'] = $this->latestChangeId;
        }
        if (null !== $this->envStatus) {
            $res['EnvStatus'] = $this->envStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastEnvStatus) {
            $res['LastEnvStatus'] = $this->lastEnvStatus;
        }
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->envDescription) {
            $res['EnvDescription'] = $this->envDescription;
        }
        if (null !== $this->applyingChange) {
            $res['ApplyingChange'] = $this->applyingChange;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createUsername) {
            $res['CreateUsername'] = $this->createUsername;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataRoot) {
            $res['DataRoot'] = $this->dataRoot;
        }
        if (null !== $this->storageBase) {
            $res['StorageBase'] = $this->storageBase;
        }
        if (null !== $this->updateUsername) {
            $res['UpdateUsername'] = $this->updateUsername;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->logBase) {
            $res['LogBase'] = $this->logBase;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->usingSharedStorage) {
            $res['UsingSharedStorage'] = $this->usingSharedStorage;
        }
        if (null !== $this->changeBanner) {
            $res['ChangeBanner'] = $this->changeBanner;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->pkgVersionLabel) {
            $res['PkgVersionLabel'] = $this->pkgVersionLabel;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->abortingChange) {
            $res['AbortingChange'] = $this->abortingChange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appEnv
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['TotalInstances'])) {
            $model->totalInstances = $map['TotalInstances'];
        }
        if (isset($map['PkgVersionStorageKey'])) {
            $model->pkgVersionStorageKey = $map['PkgVersionStorageKey'];
        }
        if (isset($map['LatestChangeId'])) {
            $model->latestChangeId = $map['LatestChangeId'];
        }
        if (isset($map['EnvStatus'])) {
            $model->envStatus = $map['EnvStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastEnvStatus'])) {
            $model->lastEnvStatus = $map['LastEnvStatus'];
        }
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['EnvDescription'])) {
            $model->envDescription = $map['EnvDescription'];
        }
        if (isset($map['ApplyingChange'])) {
            $model->applyingChange = $map['ApplyingChange'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateUsername'])) {
            $model->createUsername = $map['CreateUsername'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataRoot'])) {
            $model->dataRoot = $map['DataRoot'];
        }
        if (isset($map['StorageBase'])) {
            $model->storageBase = $map['StorageBase'];
        }
        if (isset($map['UpdateUsername'])) {
            $model->updateUsername = $map['UpdateUsername'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['LogBase'])) {
            $model->logBase = $map['LogBase'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['UsingSharedStorage'])) {
            $model->usingSharedStorage = $map['UsingSharedStorage'];
        }
        if (isset($map['ChangeBanner'])) {
            $model->changeBanner = $map['ChangeBanner'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['PkgVersionLabel'])) {
            $model->pkgVersionLabel = $map['PkgVersionLabel'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['AbortingChange'])) {
            $model->abortingChange = $map['AbortingChange'];
        }

        return $model;
    }
}
