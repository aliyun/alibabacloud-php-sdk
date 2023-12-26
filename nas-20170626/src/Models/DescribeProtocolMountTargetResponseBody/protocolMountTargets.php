<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolMountTargetResponseBody;

use AlibabaCloud\Tea\Model;

class protocolMountTargets extends Model
{
    /**
     * @description The permission group that is associated with the export directory of the protocol service.
     *
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The time when the export directory of the protocol service was created.
     *
     * @example 2018-12-12T07:28:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the export directory for the protocol service.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the export directory for the protocol service.
     *
     * @example exp-19abf5beab8d****
     *
     * @var string
     */
    public $exportId;

    /**
     * @description The fileset ID of the export directory for the protocol service.
     *
     * @example fset-1902718ea0ae****
     *
     * @var string
     */
    public $fsetId;

    /**
     * @description The export directory of the protocol service.
     *
     * @example /path/
     *
     * @var string
     */
    public $path;

    /**
     * @description The domain name of the export directory for the protocol service.
     *
     * @example cpfs-123****.cn-hangzhou.cpfs.aliyuncs.com
     *
     * @var string
     */
    public $protocolMountTargetDomain;

    /**
     * @description The ID of the protocol service.
     *
     * @example ptc-123****
     *
     * @var string
     */
    public $protocolServiceId;

    /**
     * @description The protocol type supported by the protocol service.
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The status of the mount target.
     *
     * @example CREATING
     *
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch ID of the export directory for the protocol service.
     *
     * @example vsw-2vc3c2lybvdllxyq4****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID of the export directory for the protocol service.
     *
     * @example vpc-2vct297b8157bth9z****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessGroupName'           => 'AccessGroupName',
        'createTime'                => 'CreateTime',
        'description'               => 'Description',
        'exportId'                  => 'ExportId',
        'fsetId'                    => 'FsetId',
        'path'                      => 'Path',
        'protocolMountTargetDomain' => 'ProtocolMountTargetDomain',
        'protocolServiceId'         => 'ProtocolServiceId',
        'protocolType'              => 'ProtocolType',
        'status'                    => 'Status',
        'vSwitchId'                 => 'VSwitchId',
        'vpcId'                     => 'VpcId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->exportId) {
            $res['ExportId'] = $this->exportId;
        }
        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->protocolMountTargetDomain) {
            $res['ProtocolMountTargetDomain'] = $this->protocolMountTargetDomain;
        }
        if (null !== $this->protocolServiceId) {
            $res['ProtocolServiceId'] = $this->protocolServiceId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return protocolMountTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
        }
        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProtocolMountTargetDomain'])) {
            $model->protocolMountTargetDomain = $map['ProtocolMountTargetDomain'];
        }
        if (isset($map['ProtocolServiceId'])) {
            $model->protocolServiceId = $map['ProtocolServiceId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
