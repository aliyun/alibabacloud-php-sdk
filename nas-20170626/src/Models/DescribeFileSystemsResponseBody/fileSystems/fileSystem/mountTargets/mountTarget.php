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
     * @var string
     */
    public $networkType;

    /**
     * @var clientMasterNodes
     */
    public $clientMasterNodes;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'vpcId'                      => 'VpcId',
        'status'                     => 'Status',
        'mountTargetDomain'          => 'MountTargetDomain',
        'accessGroupName'            => 'AccessGroupName',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
        'vswId'                      => 'VswId',
        'networkType'                => 'NetworkType',
        'clientMasterNodes'          => 'ClientMasterNodes',
        'tags'                       => 'Tags',
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->clientMasterNodes) {
            $res['ClientMasterNodes'] = null !== $this->clientMasterNodes ? $this->clientMasterNodes->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ClientMasterNodes'])) {
            $model->clientMasterNodes = clientMasterNodes::fromMap($map['ClientMasterNodes']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
