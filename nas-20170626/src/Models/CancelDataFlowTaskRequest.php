<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CancelDataFlowTaskRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The dataflow ID.
     *
     * This parameter is required.
     * @example dfid-194433a5be31****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request.
     *
     * Valid values:
     *
     *   true: performs only a dry run. The system checks the required parameters, request syntax, service limits, and available NAS resources. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, the specified dataflow task is canceled.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the dataflow task.
     *
     * This parameter is required.
     * @example taskId-1345768****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'dataFlowId'   => 'DataFlowId',
        'dryRun'       => 'DryRun',
        'fileSystemId' => 'FileSystemId',
        'taskId'       => 'TaskId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelDataFlowTaskRequest
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
