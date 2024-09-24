<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CancelDataFlowSubTaskRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

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
     * @example subTaskId-370kyfmyknxcyzw****
     *
     * @var string
     */
    public $dataFlowSubTaskId;

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
     * @example bmcpfs-370lx1ev9ss27o0****
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'dataFlowId'        => 'DataFlowId',
        'dataFlowSubTaskId' => 'DataFlowSubTaskId',
        'dataFlowTaskId'    => 'DataFlowTaskId',
        'dryRun'            => 'DryRun',
        'fileSystemId'      => 'FileSystemId',
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
        if (null !== $this->dataFlowSubTaskId) {
            $res['DataFlowSubTaskId'] = $this->dataFlowSubTaskId;
        }
        if (null !== $this->dataFlowTaskId) {
            $res['DataFlowTaskId'] = $this->dataFlowTaskId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelDataFlowSubTaskRequest
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
        if (isset($map['DataFlowSubTaskId'])) {
            $model->dataFlowSubTaskId = $map['DataFlowSubTaskId'];
        }
        if (isset($map['DataFlowTaskId'])) {
            $model->dataFlowTaskId = $map['DataFlowTaskId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
