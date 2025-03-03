<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponseBody\resourceGroup;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponseBody\resourceGroup\regionStatuses\regionStatus;

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
        if (\is_array($this->regionStatus)) {
            Model::validateArray($this->regionStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionStatus) {
            if (\is_array($this->regionStatus)) {
                $res['RegionStatus'] = [];
                $n1                  = 0;
                foreach ($this->regionStatus as $item1) {
                    $res['RegionStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RegionStatus'])) {
            if (!empty($map['RegionStatus'])) {
                $model->regionStatus = [];
                $n1                  = 0;
                foreach ($map['RegionStatus'] as $item1) {
                    $model->regionStatus[$n1++] = regionStatus::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
