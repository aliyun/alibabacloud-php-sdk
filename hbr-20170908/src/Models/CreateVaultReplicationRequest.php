<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreateVaultReplicationRequest extends Model
{
    /**
     * @var string
     */
    public $replicationSourceRegionId;

    /**
     * @var string
     */
    public $replicationSourceVaultId;

    /**
     * @var string
     */
    public $replicationTargetVaultId;
    protected $_name = [
        'replicationSourceRegionId' => 'ReplicationSourceRegionId',
        'replicationSourceVaultId' => 'ReplicationSourceVaultId',
        'replicationTargetVaultId' => 'ReplicationTargetVaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->replicationSourceRegionId) {
            $res['ReplicationSourceRegionId'] = $this->replicationSourceRegionId;
        }

        if (null !== $this->replicationSourceVaultId) {
            $res['ReplicationSourceVaultId'] = $this->replicationSourceVaultId;
        }

        if (null !== $this->replicationTargetVaultId) {
            $res['ReplicationTargetVaultId'] = $this->replicationTargetVaultId;
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
        if (isset($map['ReplicationSourceRegionId'])) {
            $model->replicationSourceRegionId = $map['ReplicationSourceRegionId'];
        }

        if (isset($map['ReplicationSourceVaultId'])) {
            $model->replicationSourceVaultId = $map['ReplicationSourceVaultId'];
        }

        if (isset($map['ReplicationTargetVaultId'])) {
            $model->replicationTargetVaultId = $map['ReplicationTargetVaultId'];
        }

        return $model;
    }
}
