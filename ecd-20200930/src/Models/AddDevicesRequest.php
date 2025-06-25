<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class AddDevicesRequest extends Model
{
    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string[]
     */
    public $deviceIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientType' => 'ClientType',
        'deviceIds' => 'DeviceIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceIds)) {
            Model::validateArray($this->deviceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->deviceIds) {
            if (\is_array($this->deviceIds)) {
                $res['DeviceIds'] = [];
                $n1 = 0;
                foreach ($this->deviceIds as $item1) {
                    $res['DeviceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['DeviceIds'])) {
            if (!empty($map['DeviceIds'])) {
                $model->deviceIds = [];
                $n1 = 0;
                foreach ($map['DeviceIds'] as $item1) {
                    $model->deviceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
