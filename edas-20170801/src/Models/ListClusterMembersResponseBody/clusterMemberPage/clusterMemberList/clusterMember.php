<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage\clusterMemberList;

use AlibabaCloud\Tea\Model;

class clusterMember extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $ecuId;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $clusterMemberId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
        'ecuId'           => 'EcuId',
        'ecsId'           => 'EcsId',
        'createTime'      => 'CreateTime',
        'clusterMemberId' => 'ClusterMemberId',
        'clusterId'       => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->clusterMemberId) {
            $res['ClusterMemberId'] = $this->clusterMemberId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterMember
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ClusterMemberId'])) {
            $model->clusterMemberId = $map['ClusterMemberId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
