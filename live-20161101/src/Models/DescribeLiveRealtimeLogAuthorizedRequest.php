<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeLogAuthorizedRequest extends Model
{
    /**
     * @description This parameter has no practical significance.
     *
     * @example none
     *
     * @var string
     */
    public $liveOpenapiReserve;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'liveOpenapiReserve' => 'LiveOpenapiReserve',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveOpenapiReserve) {
            $res['LiveOpenapiReserve'] = $this->liveOpenapiReserve;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRealtimeLogAuthorizedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveOpenapiReserve'])) {
            $model->liveOpenapiReserve = $map['LiveOpenapiReserve'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
