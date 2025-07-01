<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow\autoRefresh;

class dataFlow extends Model
{
    /**
     * @var autoRefresh
     */
    public $autoRefresh;

    /**
     * @var int
     */
    public $autoRefreshInterval;

    /**
     * @var string
     */
    public $autoRefreshPolicy;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataFlowId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemPath;

    /**
     * @var string
     */
    public $fsetDescription;

    /**
     * @var string
     */
    public $fsetId;

    /**
     * @var string
     */
    public $sourceSecurityType;

    /**
     * @var string
     */
    public $sourceStorage;

    /**
     * @var string
     */
    public $sourceStoragePath;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $throughput;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'autoRefresh' => 'AutoRefresh',
        'autoRefreshInterval' => 'AutoRefreshInterval',
        'autoRefreshPolicy' => 'AutoRefreshPolicy',
        'createTime' => 'CreateTime',
        'dataFlowId' => 'DataFlowId',
        'description' => 'Description',
        'errorMessage' => 'ErrorMessage',
        'fileSystemId' => 'FileSystemId',
        'fileSystemPath' => 'FileSystemPath',
        'fsetDescription' => 'FsetDescription',
        'fsetId' => 'FsetId',
        'sourceSecurityType' => 'SourceSecurityType',
        'sourceStorage' => 'SourceStorage',
        'sourceStoragePath' => 'SourceStoragePath',
        'status' => 'Status',
        'throughput' => 'Throughput',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->autoRefresh) {
            $this->autoRefresh->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRefresh) {
            $res['AutoRefresh'] = null !== $this->autoRefresh ? $this->autoRefresh->toArray($noStream) : $this->autoRefresh;
        }

        if (null !== $this->autoRefreshInterval) {
            $res['AutoRefreshInterval'] = $this->autoRefreshInterval;
        }

        if (null !== $this->autoRefreshPolicy) {
            $res['AutoRefreshPolicy'] = $this->autoRefreshPolicy;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
        }

        if (null !== $this->fsetDescription) {
            $res['FsetDescription'] = $this->fsetDescription;
        }

        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }

        if (null !== $this->sourceSecurityType) {
            $res['SourceSecurityType'] = $this->sourceSecurityType;
        }

        if (null !== $this->sourceStorage) {
            $res['SourceStorage'] = $this->sourceStorage;
        }

        if (null !== $this->sourceStoragePath) {
            $res['SourceStoragePath'] = $this->sourceStoragePath;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AutoRefresh'])) {
            $model->autoRefresh = autoRefresh::fromMap($map['AutoRefresh']);
        }

        if (isset($map['AutoRefreshInterval'])) {
            $model->autoRefreshInterval = $map['AutoRefreshInterval'];
        }

        if (isset($map['AutoRefreshPolicy'])) {
            $model->autoRefreshPolicy = $map['AutoRefreshPolicy'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
        }

        if (isset($map['FsetDescription'])) {
            $model->fsetDescription = $map['FsetDescription'];
        }

        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }

        if (isset($map['SourceSecurityType'])) {
            $model->sourceSecurityType = $map['SourceSecurityType'];
        }

        if (isset($map['SourceStorage'])) {
            $model->sourceStorage = $map['SourceStorage'];
        }

        if (isset($map['SourceStoragePath'])) {
            $model->sourceStoragePath = $map['SourceStoragePath'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
