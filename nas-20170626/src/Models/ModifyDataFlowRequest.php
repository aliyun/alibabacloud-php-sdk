<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataFlowRequest extends Model
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
     * This parameter is required.
     * @example dfid-194433a5be31****
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
     *   The description must start with a letter but cannot start with http:// or https://.
     *   The description can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example test
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
     * This parameter is required.
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The maximum data flow throughput. Unit: MB/s. Valid values:
     *
     *   600
     *   1200
     *   1500
     *
     * >  The data flow throughput must be less than the I/O throughput of the file system.
     * @example 600
     *
     * @var int
     */
    public $throughput;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'dataFlowId'   => 'DataFlowId',
        'description'  => 'Description',
        'dryRun'       => 'DryRun',
        'fileSystemId' => 'FileSystemId',
        'throughput'   => 'Throughput',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataFlowRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }

        return $model;
    }
}
