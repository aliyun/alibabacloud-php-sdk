<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\mountTargetList;

use AlibabaCloud\Dara\Model;

class mountTargets extends Model
{
    /**
     * @var string
     */
    public $accessGroup;

    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswId;
    protected $_name = [
        'accessGroup' => 'AccessGroup',
        'mountTargetDomain' => 'MountTargetDomain',
        'networkType' => 'NetworkType',
        'status' => 'Status',
        'vpcId' => 'VpcId',
        'vswId' => 'VswId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }

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
