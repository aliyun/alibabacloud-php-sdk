<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateDataFlowTaskRequest extends Model
{
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
     * @description The dataflow ID.
     *
     * @example dfid-123456
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description The type of data on which operations are performed by the dataflow task.
     *
     * Valid values:
     *
     *   Metadata: the metadata of a file, including the timestamp, ownership, and permission information of the file. If you select Metadata, only the metadata of the file is imported. You can only query the file. When you access the file data, the file is loaded from the source storage as required.
     *   Data: the data blocks of a file.
     *   MetaAndData: the metadata and data blocks of the file.
     *
     * @example Metadata
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The directory in which the dataflow task is executed.
     *
     * Limits:
     *
     *   The directory must be 2 to 1,024 characters in length.
     *   The directory must be encoded in UTF-8.
     *   The directory must start and end with a forward slash (/).
     *   Only one directory can be listed at a time.
     *   The directory must be an existing directory in the CPFS file system and must be in a fileset where the dataflow is enabled.
     *
     * @example /path_in_cpfs/
     *
     * @var string
     */
    public $directory;

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
     * @description The list of files that are executed by the dataflow task.
     *
     * Limits:
     *
     *   The list must be encoded in UTF-8.
     *   The file list is in JSON format.
     *   If the source storage is Object Storage Service (OSS), the list name must comply with the naming conventions of OSS objects.
     *
     * @example ["/path_in_cpfs/file1", "/path_in_cpfs/file2"]
     *
     * @var string
     */
    public $entryList;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-12345678
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description If you specify SrcTaskId, the configurations of the TaskAction, DataType, and EntryList parameters are copied from the desired dataflow task. You do not need to specify them.
     *
     * @example task-xxxx
     *
     * @var string
     */
    public $srcTaskId;

    /**
     * @description The type of the dataflow task.
     *
     * Valid values:
     *
     *   Import: imports data stored in the source storage to a CPFS file system.
     *   Export: exports specified data from a CPFS file system to the source storage.
     *   Evict: releases the data blocks of a file in a CPFS file system. After the eviction, only the metadata of the file is retained in the CPFS file system. You can still query the file. However, the data blocks of the file are cleared and do not occupy the storage space in the CPFS file system. When you access the file data, the file is loaded from the source storage as required.
     *   Inventory: obtains the inventory list managed by a dataflow from the CPFS file system, providing the cache status of inventories in the dataflow.
     *
     * @example Import
     *
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'dataFlowId'   => 'DataFlowId',
        'dataType'     => 'DataType',
        'directory'    => 'Directory',
        'dryRun'       => 'DryRun',
        'entryList'    => 'EntryList',
        'fileSystemId' => 'FileSystemId',
        'srcTaskId'    => 'SrcTaskId',
        'taskAction'   => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->entryList) {
            $res['EntryList'] = $this->entryList;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->srcTaskId) {
            $res['SrcTaskId'] = $this->srcTaskId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataFlowTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EntryList'])) {
            $model->entryList = $map['EntryList'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['SrcTaskId'])) {
            $model->srcTaskId = $map['SrcTaskId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
