<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions\ecsRegion\regionIds;

class ecsRegion extends Model
{
    /**
     * @var regionIds
     */
    public $regionIds;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'regionIds' => 'RegionIds',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->regionIds) {
            $this->regionIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionIds) {
            $res['RegionIds'] = null !== $this->regionIds ? $this->regionIds->toArray($noStream) : $this->regionIds;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['RegionIds'])) {
            $model->regionIds = regionIds::fromMap($map['RegionIds']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
