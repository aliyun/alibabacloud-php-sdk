<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DeleteDeviceGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceGroupIds;
    protected $_name = [
        'deviceGroupIds' => 'DeviceGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->deviceGroupIds)) {
            Model::validateArray($this->deviceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceGroupIds) {
            if (\is_array($this->deviceGroupIds)) {
                $res['DeviceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->deviceGroupIds as $item1) {
                    $res['DeviceGroupIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['DeviceGroupIds'])) {
            if (!empty($map['DeviceGroupIds'])) {
                $model->deviceGroupIds = [];
                $n1 = 0;
                foreach ($map['DeviceGroupIds'] as $item1) {
                    $model->deviceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
