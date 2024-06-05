<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateProtocolServiceRequest extends Model
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
     * @description The description of the protocol service. The name of the protocol service appears in the console.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter and cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * Valid values:
     *
     *   true: performs only a dry run and does not create the protocol service. The system checks the request format, service limits, prerequisites, and whether the required parameters are specified. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned. No value is returned for the ProtocolServiceId parameter.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, a protocol service is created.
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
     * @example cpfs-123****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The specification of the protocol service.
     *
     * Valid values:
     *
     *   CL2
     *   General
     *   CL1
     *
     * This parameter is required.
     * @example General
     *
     * @var string
     */
    public $protocolSpec;

    /**
     * @description The protocol type of the protocol service.
     *
     * This parameter is required.
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The throughput of the protocol service.
     *
     * Unit: MB/s.
     * @example 8000
     *
     * @var int
     */
    public $throughput;

    /**
     * @description The vSwitch ID of the protocol service.
     *
     * This parameter is required.
     * @example vsw-123****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID of the protocol service. The VPC ID of the protocol service must be the same as the VPC ID of the file system.
     *
     * This parameter is required.
     * @example vpc-123****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'description'  => 'Description',
        'dryRun'       => 'DryRun',
        'fileSystemId' => 'FileSystemId',
        'protocolSpec' => 'ProtocolSpec',
        'protocolType' => 'ProtocolType',
        'throughput'   => 'Throughput',
        'vSwitchId'    => 'VSwitchId',
        'vpcId'        => 'VpcId',
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
        if (null !== $this->protocolSpec) {
            $res['ProtocolSpec'] = $this->protocolSpec;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
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
     * @return CreateProtocolServiceRequest
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
        if (isset($map['ProtocolSpec'])) {
            $model->protocolSpec = $map['ProtocolSpec'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
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
