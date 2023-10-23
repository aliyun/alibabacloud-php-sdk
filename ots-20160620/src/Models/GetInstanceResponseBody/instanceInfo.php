<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceResponseBody\instanceInfo\quota;
use AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceResponseBody\instanceInfo\tagInfos;
use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $network;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var int
     */
    public $readCapacity;

    /**
     * @var int
     */
    public $status;

    /**
     * @var tagInfos
     */
    public $tagInfos;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $writeCapacity;
    protected $_name = [
        'clusterType'   => 'ClusterType',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'instanceName'  => 'InstanceName',
        'network'       => 'Network',
        'quota'         => 'Quota',
        'readCapacity'  => 'ReadCapacity',
        'status'        => 'Status',
        'tagInfos'      => 'TagInfos',
        'userId'        => 'UserId',
        'writeCapacity' => 'WriteCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->readCapacity) {
            $res['ReadCapacity'] = $this->readCapacity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagInfos) {
            $res['TagInfos'] = null !== $this->tagInfos ? $this->tagInfos->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->writeCapacity) {
            $res['WriteCapacity'] = $this->writeCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }
        if (isset($map['ReadCapacity'])) {
            $model->readCapacity = $map['ReadCapacity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagInfos'])) {
            $model->tagInfos = tagInfos::fromMap($map['TagInfos']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WriteCapacity'])) {
            $model->writeCapacity = $map['WriteCapacity'];
        }

        return $model;
    }
}
