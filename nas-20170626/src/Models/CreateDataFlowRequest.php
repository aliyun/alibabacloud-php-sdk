<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowRequest\autoRefreshs;
use AlibabaCloud\Tea\Model;

class CreateDataFlowRequest extends Model
{
    /**
     * @description The automatic update interval. CPFS checks whether data is updated in the directory at the interval specified by this parameter. If data is updated, CPFS starts an automatic update task. Unit: minutes.
     *
     * Valid values: 5 to 525600. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $autoRefreshInterval;

    /**
     * @description The automatic update policy. The updated data in the source storage is imported into the CPFS file system based on the policy.
     *
     *   None (default): Updated data in the source storage is not automatically imported into the CPFS file system. You can run a dataflow task to import the updated data from the source storage.
     *   ImportChanged: Updated data in the source storage is automatically imported into the CPFS file system.
     *
     * @example None
     *
     * @var string
     */
    public $autoRefreshPolicy;

    /**
     * @description The automatic update configurations.
     *
     * @var autoRefreshs[]
     */
    public $autoRefreshs;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The value of RequestId may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the dataflow.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter but cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example Bucket01 DataFlow
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * Valid values:
     *
     *   true: performs a dry run. The system checks the required parameters, request syntax, limits, and available NAS resources. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned. No value is returned for the FileSystemId parameter.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, a file system is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example /path/
     *
     * @var string
     */
    public $fileSystemPath;

    /**
     * @description The fileset ID.
     *
     * @example fset-1902718ea0ae****
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
     * @description The access path of the source storage. Format: `<storage type>://<path>`.
     *
     * Parameters:
     *
     *   storage type: Only OSS is supported.
     *
     *   path: the name of the OSS bucket. Limits:
     *
     *   The name can contain only lowercase letters, digits, and hyphens (-). The name must start and end with a lowercase letter or digit.
     *   The name must be 8 to 128 characters in length.
     *   The name must be encoded in UTF-8.
     *   The name cannot start with `http://` or `https://`.
     *
     * >  The OSS bucket must be an existing bucket in the region.
     * @example oss://bucket1
     *
     * @var string
     */
    public $sourceStorage;

    /**
     * @example /prefix/
     *
     * @var string
     */
    public $sourceStoragePath;

    /**
     * @description The maximum dataflow throughput. Unit: MB/s. Valid values:
     *
     *   600
     *   1,200
     *   1,500
     *
     * >  The dataflow throughput must be less than the I/O throughput of the file system
     * @example 600
     *
     * @var int
     */
    public $throughput;
    protected $_name = [
        'autoRefreshInterval' => 'AutoRefreshInterval',
        'autoRefreshPolicy'   => 'AutoRefreshPolicy',
        'autoRefreshs'        => 'AutoRefreshs',
        'clientToken'         => 'ClientToken',
        'description'         => 'Description',
        'dryRun'              => 'DryRun',
        'fileSystemId'        => 'FileSystemId',
        'fileSystemPath'      => 'FileSystemPath',
        'fsetId'              => 'FsetId',
        'sourceSecurityType'  => 'SourceSecurityType',
        'sourceStorage'       => 'SourceStorage',
        'sourceStoragePath'   => 'SourceStoragePath',
        'throughput'          => 'Throughput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRefreshInterval) {
            $res['AutoRefreshInterval'] = $this->autoRefreshInterval;
        }
        if (null !== $this->autoRefreshPolicy) {
            $res['AutoRefreshPolicy'] = $this->autoRefreshPolicy;
        }
        if (null !== $this->autoRefreshs) {
            $res['AutoRefreshs'] = [];
            if (null !== $this->autoRefreshs && \is_array($this->autoRefreshs)) {
                $n = 0;
                foreach ($this->autoRefreshs as $item) {
                    $res['AutoRefreshs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
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
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRefreshInterval'])) {
            $model->autoRefreshInterval = $map['AutoRefreshInterval'];
        }
        if (isset($map['AutoRefreshPolicy'])) {
            $model->autoRefreshPolicy = $map['AutoRefreshPolicy'];
        }
        if (isset($map['AutoRefreshs'])) {
            if (!empty($map['AutoRefreshs'])) {
                $model->autoRefreshs = [];
                $n                   = 0;
                foreach ($map['AutoRefreshs'] as $item) {
                    $model->autoRefreshs[$n++] = null !== $item ? autoRefreshs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
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
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }

        return $model;
    }
}
