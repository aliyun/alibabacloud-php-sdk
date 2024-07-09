<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions\ecsRegion\regionIds;
use AlibabaCloud\Tea\Model;

class ecsRegion extends Model
{
    /**
     * @description The region IDs.
     *
     * @var regionIds
     */
    public $regionIds;

    /**
     * @description The Alibaba Cloud account to which the region belongs. This parameter is used in cross-account synchronization scenarios.
     *
     * @example 1234567890
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'regionIds' => 'RegionIds',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionIds) {
            $res['RegionIds'] = null !== $this->regionIds ? $this->regionIds->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionIds'])) {
            $model->regionIds = regionIds::fromMap($map['RegionIds']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
