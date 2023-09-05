<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairProgressRequest extends Model
{
    /**
     * @description The region ID of the replication pair.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the replication pair. You can call the [DescribeDiskReplicaPairs](~~354206~~)operation to query the IDs of existing replication pairs.
     *
     * @example pair-cn-tl32ribst0z
     *
     * @var string
     */
    public $replicaPairId;
    protected $_name = [
        'regionId'      => 'RegionId',
        'replicaPairId' => 'ReplicaPairId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaPairProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
        }

        return $model;
    }
}
