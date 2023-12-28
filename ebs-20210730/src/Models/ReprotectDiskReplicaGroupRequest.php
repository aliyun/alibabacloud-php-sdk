<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class ReprotectDiskReplicaGroupRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the replication pair-consistent group. You can call the [DescribeDiskReplicaGroups](~~426614~~) operation to query the IDs of replication pair-consistent groups.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the replication pair-consistent group. You can call the [DescribeDiskReplicaGroups](~~426614~~) operation to query the IDs of replication pair-consistent groups.
     *
     * @example pg-myreplica****
     *
     * @var string
     */
    public $replicaGroupId;

    /**
     * @description Specifies whether to enable the reverse replication sub-feature. Valid values: true and false. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $reverseReplicate;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'regionId'         => 'RegionId',
        'replicaGroupId'   => 'ReplicaGroupId',
        'reverseReplicate' => 'ReverseReplicate',
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
        if (null !== $this->reverseReplicate) {
            $res['ReverseReplicate'] = $this->reverseReplicate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReprotectDiskReplicaGroupRequest
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
        if (isset($map['ReverseReplicate'])) {
            $model->reverseReplicate = $map['ReverseReplicate'];
        }

        return $model;
    }
}
