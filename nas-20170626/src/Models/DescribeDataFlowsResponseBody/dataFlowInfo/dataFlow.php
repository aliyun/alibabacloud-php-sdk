<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow\autoRefresh;
use AlibabaCloud\Tea\Model;

class dataFlow extends Model
{
    /**
     * @description The details about automatic update policies.
     *
     * @var autoRefresh
     */
    public $autoRefresh;

    /**
     * @description The automatic update interval. CPFS checks whether data is updated in the directory at the interval specified by this parameter. If data is updated, CPFS starts an automatic update task. Unit: minutes.
     *
     * Valid values: 5 to 526600. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $autoRefreshInterval;

    /**
     * @description The automatic update policy. The updated data in the source storage is imported into the CPFS file system based on the policy. Valid values:
     *
     *   None: Updated data in the source storage is not automatically imported to the CPFS file system. You can run a dataflow task to import the updated data from the source storage.
     *   ImportChanged: Updated data in the source storage is automatically imported to the CPFS file system.
     *
     * @example None
     *
     * @var string
     */
    public $autoRefreshPolicy;

    /**
     * @description The time when the fileset was created.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     * @example 2021-09-30T10:08:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The dataflow ID.
     *
     * @example dfid-123456
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description The description of the dataflow.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter but cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @var string
     */
    public $description;

    /**
     * @description The error message returned. Valid values:
     *
     *   None (default): The dataflow status is normal.
     *   SourceStorageUnreachable: The access path of the source storage is not found.
     *   ThroughputTooLow: The dataflow throughput is low.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-12345678
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The directory of the fileset in the CPFS file system.
     *
     * Limits:
     *
     *   The directory must be 2 to 1,024 characters in length.
     *   The directory must be encoded in UTF-8.
     *   The directory must start and end with a forward slash (/).
     *   The directory must be a fileset directory in the CPFS file system.
     *
     * @example /a/b/c/
     *
     * @var string
     */
    public $fileSystemPath;

    /**
     * @description The description of the automatic update.
     *
     * @var string
     */
    public $fsetDescription;

    /**
     * @description The fileset ID.
     *
     * @example fset-123456
     *
     * @var string
     */
    public $fsetId;

    /**
     * @description The type of security mechanism for the source storage. This parameter must be specified if the source storage is accessed with a security mechanism. Valid values:
     *
     *   None (default): The source storage can be accessed without a security mechanism.
     *   SSL: The source storage must be accessed with an SSL certificate.
     *
     * @example SSL
     *
     * @var string
     */
    public $sourceSecurityType;

    /**
     * @description The access path of the source storage. Format:://.
     *
     * Parameters:
     *
     *   storage type: Only OSS is supported.
     *
     *   path: the name of the OSS bucket.
     *
     *   The name can contain only lowercase letters, digits, and hyphens (-). The name must start and end with a lowercase letter or digit.
     *   The name must be 8 to 128 characters in length.
     *   The name must be encoded in UTF-8.
     *   The name cannot start with http:// or https://.
     *
     * >  The OSS bucket must be an existing bucket in the region.
     * @example oss://bucket1
     *
     * @var string
     */
    public $sourceStorage;

    /**
     * @description 源端存储内的访问路径。
     *
     * @var string
     */
    public $sourceStoragePath;

    /**
     * @description The dataflow status. Valid values:
     *
     *   Starting: The dataflow is being created or enabled.
     *   Running: The dataflow has been created and is running properly.
     *   Updating: The dataflow is being modified. For example, the dataflow throughput is increased and the automatic update interval is modified.
     *   Deleting: The dataflow is being deleted.
     *   Stopping: The dataflow is being disabled.
     *   Stopped: The dataflow has been disabled.
     *   Misconfigured: The dataflow configuration is abnormal. For example, the source storage is inaccessible, and the automatic update cannot be completed due to low dataflow throughput.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The maximum dataflow throughput. Unit: MB/s. Valid values:
     *
     *   600
     *   1,200
     *   1,500
     *
     * >  The dataflow throughput must be less than the I/O throughput of the file system.
     * @example 600
     *
     * @var int
     */
    public $throughput;

    /**
     * @description The time when the fileset was last updated.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     * @example 2021-09-30T10:08:08Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'autoRefresh'         => 'AutoRefresh',
        'autoRefreshInterval' => 'AutoRefreshInterval',
        'autoRefreshPolicy'   => 'AutoRefreshPolicy',
        'createTime'          => 'CreateTime',
        'dataFlowId'          => 'DataFlowId',
        'description'         => 'Description',
        'errorMessage'        => 'ErrorMessage',
        'fileSystemId'        => 'FileSystemId',
        'fileSystemPath'      => 'FileSystemPath',
        'fsetDescription'     => 'FsetDescription',
        'fsetId'              => 'FsetId',
        'sourceSecurityType'  => 'SourceSecurityType',
        'sourceStorage'       => 'SourceStorage',
        'sourceStoragePath'   => 'SourceStoragePath',
        'status'              => 'Status',
        'throughput'          => 'Throughput',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRefresh) {
            $res['AutoRefresh'] = null !== $this->autoRefresh ? $this->autoRefresh->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return dataFlow
     */
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
