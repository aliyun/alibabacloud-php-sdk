<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget\clientMasterNodes;
use AlibabaCloud\Tea\Model;

class mountTarget extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var clientMasterNodes
     */
    public $clientMasterNodes;

    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $accessGroup;

    /**
     * @var string
     */
    public $dualStackMountTargetDomain;

    /**
     * @var string
     */
    public $vswId;

    /**
     * @var string
     */
    public $networkType;
    protected $_name = [
        'vpcId'                      => 'VpcId',
        'status'                     => 'Status',
        'clientMasterNodes'          => 'ClientMasterNodes',
        'mountTargetDomain'          => 'MountTargetDomain',
        'accessGroup'                => 'AccessGroup',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
        'vswId'                      => 'VswId',
        'networkType'                => 'NetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->clientMasterNodes) {
            $res['ClientMasterNodes'] = null !== $this->clientMasterNodes ? $this->clientMasterNodes->toMap() : null;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
        }
        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ClientMasterNodes'])) {
            $model->clientMasterNodes = clientMasterNodes::fromMap($map['ClientMasterNodes']);
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }
        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
