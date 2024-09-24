<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowSubTaskRequest\condition;
use AlibabaCloud\Tea\Model;

class CreateDataFlowSubTaskRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var condition
     */
    public $condition;

    /**
     * @description This parameter is required.
     *
     * @example dfid-194433a5be31****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description This parameter is required.
     *
     * @example taskId-12345678
     *
     * @var string
     */
    public $dataFlowTaskId;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example /mnt/file.png
     *
     * @var string
     */
    public $dstFilePath;

    /**
     * @description This parameter is required.
     *
     * @example bmcpfs-370lx1ev9ss27o0****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description This parameter is required.
     *
     * @example /test/file.png
     *
     * @var string
     */
    public $srcFilePath;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'condition'      => 'Condition',
        'dataFlowId'     => 'DataFlowId',
        'dataFlowTaskId' => 'DataFlowTaskId',
        'dryRun'         => 'DryRun',
        'dstFilePath'    => 'DstFilePath',
        'fileSystemId'   => 'FileSystemId',
        'srcFilePath'    => 'SrcFilePath',
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
        if (null !== $this->condition) {
            $res['Condition'] = null !== $this->condition ? $this->condition->toMap() : null;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->dataFlowTaskId) {
            $res['DataFlowTaskId'] = $this->dataFlowTaskId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->dstFilePath) {
            $res['DstFilePath'] = $this->dstFilePath;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->srcFilePath) {
            $res['SrcFilePath'] = $this->srcFilePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataFlowSubTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Condition'])) {
            $model->condition = condition::fromMap($map['Condition']);
        }
        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }
        if (isset($map['DataFlowTaskId'])) {
            $model->dataFlowTaskId = $map['DataFlowTaskId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['DstFilePath'])) {
            $model->dstFilePath = $map['DstFilePath'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['SrcFilePath'])) {
            $model->srcFilePath = $map['SrcFilePath'];
        }

        return $model;
    }
}
