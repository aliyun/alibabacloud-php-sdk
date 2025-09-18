<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\QueryDeviceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\QueryDeviceListResponseBody\deviceList\deviceUnionIds;

class deviceList extends Model
{
    /**
     * @var string
     */
    public $deviceIconUrl;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceOpenId;

    /**
     * @var deviceUnionIds[]
     */
    public $deviceUnionIds;

    /**
     * @var string
     */
    public $online;
    protected $_name = [
        'deviceIconUrl' => 'DeviceIconUrl',
        'deviceName' => 'DeviceName',
        'deviceOpenId' => 'DeviceOpenId',
        'deviceUnionIds' => 'DeviceUnionIds',
        'online' => 'Online',
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
        if (null !== $this->deviceIconUrl) {
            $res['DeviceIconUrl'] = $this->deviceIconUrl;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

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

        if (null !== $this->online) {
            $res['Online'] = $this->online;
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
        if (isset($map['DeviceIconUrl'])) {
            $model->deviceIconUrl = $map['DeviceIconUrl'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

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

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        return $model;
    }
}
