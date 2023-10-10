<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage\clusterMemberList;

use AlibabaCloud\Tea\Model;

class clusterMember extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example 52984524-6d48-4bbd-85f2-a34b0e5b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the ECS instance in the cluster.
     *
     * @example adb03eeb-3adf-4d7e-afe1-03d1ad45****
     *
     * @var string
     */
    public $clusterMemberId;

    /**
     * @description The timestamp when the ECS instance was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573281038175
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-2zej4i2jdf3ntwhj****
     *
     * @var string
     */
    public $ecsId;

    /**
     * @description The unique ID of the elastic compute unit (ECU). You can run the `dmidecode` command on the ECS instance to query the ECU ID.
     *
     * @example 70ed3f59-b476-49aa-be09-9e6c375d****
     *
     * @var string
     */
    public $ecuId;

    /**
     * @description The private IP address for the ECS instance.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The state of the ECS instance. Valid values:
     *
     *   1: The instance is running.
     *   0: The instance is being converted.
     *   \-1: The instance fails to be converted.
     *   \-2: The instance is offline.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The timestamp when the ECS instance was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573281041113
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'clusterMemberId' => 'ClusterMemberId',
        'createTime'      => 'CreateTime',
        'ecsId'           => 'EcsId',
        'ecuId'           => 'EcuId',
        'privateIp'       => 'PrivateIp',
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return clusterMember
     */
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
