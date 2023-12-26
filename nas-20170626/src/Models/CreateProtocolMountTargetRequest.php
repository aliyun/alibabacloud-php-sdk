<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateProtocolMountTargetRequest extends Model
{
    /**
     * @description The name of the permission group.
     *
     * Default value: DEFAULT_VPC_GROUP_NAME.
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the export directory for the protocol service. The **name of the export directory** appears in the console.
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
     * @description Specifies whether to perform a dry run. The dry run checks parameter validity and prerequisites. The dry run does not create an export directory or incur fees.
     *
     * Valid values:
     *
     *   true: performs a dry run. The system checks the request format, service limits, prerequisites, and whether the required parameters are specified. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned. No value is returned for the ExportId parameter.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, an export directory is created.
     *
     * @example true
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
     * @description The ID of the fileset that you want to export.
     *
     * Limits:
     *
     *   The fileset already exists.
     *   You can create only one export directory for a fileset.
     *   You can specify either a fileset or a path.
     *
     * @example fset-123****
     *
     * @var string
     */
    public $fsetId;

    /**
     * @description The path of the CPFS directory that you want to export.
     *
     * Limits:
     *
     *   The directory already exists in the CPFS file system.
     *   You can create only one export directory for a directory.
     *   You can specify either a fileset or a path.
     *
     * Format:
     *
     *   The path must be 1 to 1,024 characters in length.
     *   The path must be encoded in UTF-8.
     *   The path must start and end with a forward slash (/). The root directory is `/`.
     *
     * @example /
     *
     * @var string
     */
    public $path;

    /**
     * @description The ID of the protocol service.
     *
     * @example ptc-123****
     *
     * @var string
     */
    public $protocolServiceId;

    /**
     * @description The vSwitch ID of the export directory for the protocol service.
     *
     * @example vsw-123****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID of the export directory for the protocol service.
     *
     * @example vpc-123****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessGroupName'   => 'AccessGroupName',
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'dryRun'            => 'DryRun',
        'fileSystemId'      => 'FileSystemId',
        'fsetId'            => 'FsetId',
        'path'              => 'Path',
        'protocolServiceId' => 'ProtocolServiceId',
        'vSwitchId'         => 'VSwitchId',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
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
        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->protocolServiceId) {
            $res['ProtocolServiceId'] = $this->protocolServiceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProtocolMountTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
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
        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProtocolServiceId'])) {
            $model->protocolServiceId = $map['ProtocolServiceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
