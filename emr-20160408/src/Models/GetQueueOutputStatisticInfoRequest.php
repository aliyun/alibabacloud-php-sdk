<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class GetQueueOutputStatisticInfoRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $fromDatetime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $toDatetime;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'fromDatetime'    => 'FromDatetime',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'toDatetime'      => 'ToDatetime',
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
        if (null !== $this->fromDatetime) {
            $res['FromDatetime'] = $this->fromDatetime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->toDatetime) {
            $res['ToDatetime'] = $this->toDatetime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueueOutputStatisticInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['FromDatetime'])) {
            $model->fromDatetime = $map['FromDatetime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ToDatetime'])) {
            $model->toDatetime = $map['ToDatetime'];
        }

        return $model;
    }
}
