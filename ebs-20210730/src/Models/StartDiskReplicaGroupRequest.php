<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class StartDiskReplicaGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $oneShot;
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
        'oneShot'        => 'OneShot',
        'regionId'       => 'RegionId',
        'replicaGroupId' => 'ReplicaGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->oneShot) {
            $res['OneShot'] = $this->oneShot;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicaGroupId) {
            $res['ReplicaGroupId'] = $this->replicaGroupId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OneShot'])) {
            $model->oneShot = $map['OneShot'];
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
