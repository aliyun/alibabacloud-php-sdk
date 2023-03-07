<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList\fileSystems\mountTargetList;

use AlibabaCloud\Tea\Model;

class mountTargets extends Model
{
    /**
     * @example c0967****.cn-hangzhou.cpfs.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-8vbvb34rtyh6xb3zrehs1****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-8vb34rtyh6xb3zrehs1****
     *
     * @var string
     */
    public $vswId;
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'networkType'       => 'NetworkType',
        'status'            => 'Status',
        'vpcId'             => 'VpcId',
        'vswId'             => 'VswId',
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountTargets
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }

        return $model;
    }
}
