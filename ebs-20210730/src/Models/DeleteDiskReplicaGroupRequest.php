<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DeleteDiskReplicaGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicaGroupId;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'regionId'       => 'RegionId',
        'replicaGroupId' => 'ReplicaGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicaGroupId) {
            $res['ReplicaGroupId'] = $this->replicaGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDiskReplicaGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaGroupId'])) {
            $model->replicaGroupId = $map['ReplicaGroupId'];
        }

        return $model;
    }
}
