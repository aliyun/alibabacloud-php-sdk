<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets\mountTarget\clientMasterNodes;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets\mountTarget\tags;
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
    public $accessGroupName;

    /**
     * @var string
     */
    public $dualStackMountTargetDomain;

    /**
     * @var string
     */
    public $vswId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $networkType;
    protected $_name = [
        'vpcId'                      => 'VpcId',
        'status'                     => 'Status',
        'clientMasterNodes'          => 'ClientMasterNodes',
        'mountTargetDomain'          => 'MountTargetDomain',
        'accessGroupName'            => 'AccessGroupName',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
        'vswId'                      => 'VswId',
        'tags'                       => 'Tags',
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
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
        }
        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }
        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
