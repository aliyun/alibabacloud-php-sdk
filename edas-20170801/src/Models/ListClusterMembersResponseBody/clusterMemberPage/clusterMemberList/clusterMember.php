<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage\clusterMemberList;

use AlibabaCloud\Dara\Model;

class clusterMember extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterMemberId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $ecuId;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterMemberId' => 'ClusterMemberId',
        'createTime' => 'CreateTime',
        'ecsId' => 'EcsId',
        'ecuId' => 'EcuId',
        'privateIp' => 'PrivateIp',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterMemberId) {
            $res['ClusterMemberId'] = $this->clusterMemberId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }

        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterMemberId'])) {
            $model->clusterMemberId = $map['ClusterMemberId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }

        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
