<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class ReprotectDiskReplicaPairRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example pair-cn-dsa****
     *
     * @var string
     */
    public $replicaPairId;

    /**
     * @description 反向复制开关：false代表恢复原方向，true代表反向复制。默认值是true。
     *
     * @var bool
     */
    public $reverseReplicate;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'regionId'         => 'RegionId',
        'replicaPairId'    => 'ReplicaPairId',
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
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
        }
        if (null !== $this->reverseReplicate) {
            $res['ReverseReplicate'] = $this->reverseReplicate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReprotectDiskReplicaPairRequest
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
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
        }
        if (isset($map['ReverseReplicate'])) {
            $model->reverseReplicate = $map['ReverseReplicate'];
        }

        return $model;
    }
}
