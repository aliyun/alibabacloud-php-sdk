<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponseBody\result\deviceUnionIds;

class result extends Model
{
    /**
     * @var string
     */
    public $deviceOpenId;

    /**
     * @var deviceUnionIds[]
     */
    public $deviceUnionIds;
    protected $_name = [
        'deviceOpenId' => 'DeviceOpenId',
        'deviceUnionIds' => 'DeviceUnionIds',
    ];

    public function validate()
    {
        if (\is_array($this->deviceUnionIds)) {
            Model::validateArray($this->deviceUnionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceOpenId) {
            $res['DeviceOpenId'] = $this->deviceOpenId;
        }

        if (null !== $this->deviceUnionIds) {
            if (\is_array($this->deviceUnionIds)) {
                $res['DeviceUnionIds'] = [];
                $n1 = 0;
                foreach ($this->deviceUnionIds as $item1) {
                    $res['DeviceUnionIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeviceOpenId'])) {
            $model->deviceOpenId = $map['DeviceOpenId'];
        }

        if (isset($map['DeviceUnionIds'])) {
            if (!empty($map['DeviceUnionIds'])) {
                $model->deviceUnionIds = [];
                $n1 = 0;
                foreach ($map['DeviceUnionIds'] as $item1) {
                    $model->deviceUnionIds[$n1] = deviceUnionIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
