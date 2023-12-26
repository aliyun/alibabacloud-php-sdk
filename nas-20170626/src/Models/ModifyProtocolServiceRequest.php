<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyProtocolServiceRequest extends Model
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
     * @description The description of the protocol service.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter and cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example The description of the protocol service.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. The dry run checks parameter validity and prerequisites. The dry run does not modify a file system or incur fees.
     *
     * Valid values:
     *
     *   true: performs only a dry run and does not modify the protocol service. The system checks the request format, service limits, prerequisites, and whether the required parameters are specified. If the request fails the dry run, an error message is returned. If the request passes the dry run, a 200 HTTP status code is returned.
     *   false (default): performs a dry run and performs the actual request. If the request passes the dry run, the service protocol is modified.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-123****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the protocol service.
     *
     * @example ptc-123****
     *
     * @var string
     */
    public $protocolServiceId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'dryRun'            => 'DryRun',
        'fileSystemId'      => 'FileSystemId',
        'protocolServiceId' => 'ProtocolServiceId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->protocolServiceId) {
            $res['ProtocolServiceId'] = $this->protocolServiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyProtocolServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ProtocolServiceId'])) {
            $model->protocolServiceId = $map['ProtocolServiceId'];
        }

        return $model;
    }
}
