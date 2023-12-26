<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyProtocolMountTargetRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the export directory for the protocol service.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter but cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. The dry run checks parameter validity and prerequisites. The dry run does not modify the specified export directory or incur fees.
     *
     * Valid values:
     *
     *   true: performs only a dry run. The system checks the required parameters, request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned.
     *   false (default): performs a dry run and sends the request.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the export directory for the protocol service.
     *
     * @example exp-19abf5beab8d****
     *
     * @var string
     */
    public $exportId;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the protocol service.
     *
     * @example ptc-197ed6a00f2b****
     *
     * @var string
     */
    public $protocolServiceId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'dryRun'            => 'DryRun',
        'exportId'          => 'ExportId',
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
        if (null !== $this->exportId) {
            $res['ExportId'] = $this->exportId;
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
     * @return ModifyProtocolMountTargetRequest
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
        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
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
