<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponseBody\fileSystemList;

use AlibabaCloud\Tea\Model;

class mountTargetList extends Model
{
    /**
     * @description The address of the mount target.
     *
     * @example c0967****.cn-hangzhou.cpfs.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The network type. Valid values: Valid values:
     *
     *   vpc
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The state of the mount target. Valid values:
     *
     *   Active: The mount target is available.
     *   Inactive: The mount target is unavailable.
     *   Pending: The mount target is being mounted.
     *   Deleting: The mount target is being deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-2ze0c41hwu7lc29ris***
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-8vbvb34rtyh6xb3zrehs1****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'networkType'       => 'NetworkType',
        'status'            => 'Status',
        'vSwitchId'         => 'VSwitchId',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
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
     * @return mountTargetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
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
