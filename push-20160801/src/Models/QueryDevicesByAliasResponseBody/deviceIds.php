<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAliasResponseBody;

use AlibabaCloud\Dara\Model;

class deviceIds extends Model
{
    /**
     * @var string[]
     */
    public $deviceId;
    protected $_name = [
        'deviceId' => 'DeviceId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceId)) {
            Model::validateArray($this->deviceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceId) {
            if (\is_array($this->deviceId)) {
                $res['DeviceId'] = [];
                $n1 = 0;
                foreach ($this->deviceId as $item1) {
                    $res['DeviceId'][$n1] = $item1;
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
        if (isset($map['DeviceId'])) {
            if (!empty($map['DeviceId'])) {
                $model->deviceId = [];
                $n1 = 0;
                foreach ($map['DeviceId'] as $item1) {
                    $model->deviceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
