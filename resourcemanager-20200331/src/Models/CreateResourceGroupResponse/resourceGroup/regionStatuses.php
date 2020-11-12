<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateResourceGroupResponse\resourceGroup;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateResourceGroupResponse\resourceGroup\regionStatuses\regionStatus;
use AlibabaCloud\Tea\Model;

class regionStatuses extends Model
{
    /**
     * @var regionStatus[]
     */
    public $regionStatus;
    protected $_name = [
        'regionStatus' => 'RegionStatus',
    ];

    public function validate()
    {
        Model::validateRequired('regionStatus', $this->regionStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionStatus) {
            $res['RegionStatus'] = [];
            if (null !== $this->regionStatus && \is_array($this->regionStatus)) {
                $n = 0;
                foreach ($this->regionStatus as $item) {
                    $res['RegionStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionStatus'])) {
            if (!empty($map['RegionStatus'])) {
                $model->regionStatus = [];
                $n                   = 0;
                foreach ($map['RegionStatus'] as $item) {
                    $model->regionStatus[$n++] = null !== $item ? regionStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
