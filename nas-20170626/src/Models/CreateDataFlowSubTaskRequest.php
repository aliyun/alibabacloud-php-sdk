<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowSubTaskRequest\condition;
use AlibabaCloud\Tea\Model;

class CreateDataFlowSubTaskRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure the idempotence?](https://help.aliyun.com/document_detail/25693.html)
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The check conditions. The check must be passed after the following conditions are specified.
     *
     * @var condition
     */
    public $condition;

    /**
     * @description The ID of the data flow.
     *
     * This parameter is required.
     *
     * @example df-194433a5be31****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description The ID of the data flow task.
     *
     * >  Only the IDs of data streaming tasks are supported.
     *
     * This parameter is required.
     *
     * @example task-38aa8e890f45****
     *
     * @var string
     */
    public $dataFlowTaskId;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * During the dry run, the system checks whether the request parameters are valid and whether the requested resources are available. During the dry run, no data streaming subtask is created and no fee is incurred.
     *
     * Valid values:
     *
     *   true: performs a dry run. The system checks the required parameters, request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned. No value is returned for the DataFlowSubTaskId parameter.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, a data streaming subtask is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The path of the destination file. Limits:
     *
     *   The path must be 1 to 1,023 characters in length.
     *   The path must be encoded in UTF-8.
     *   The path must start with a forward slash (/).
     *   The path must end with the file name.
     *
     * This parameter is required.
     *
     * @example /mnt/file.png
     *
     * @var string
     */
    public $dstFilePath;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example bmcpfs-370lx1ev9ss27o0****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The path of the source file. Limits:
     *
     *   The path must be 1 to 1,023 characters in length.
     *   The path must be encoded in UTF-8.
     *   The path must start with a forward slash (/).
     *   The path must end with the file name.
     *
     * This parameter is required.
     *
     * @example /test/file.png
     *
     * @var string
     */
    public $srcFilePath;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'condition' => 'Condition',
        'dataFlowId' => 'DataFlowId',
        'dataFlowTaskId' => 'DataFlowTaskId',
        'dryRun' => 'DryRun',
        'dstFilePath' => 'DstFilePath',
        'fileSystemId' => 'FileSystemId',
        'srcFilePath' => 'SrcFilePath',
    ];

    public function validate() {}

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
