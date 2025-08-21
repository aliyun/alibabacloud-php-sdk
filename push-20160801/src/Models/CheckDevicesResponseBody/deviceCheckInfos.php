<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody\deviceCheckInfos\deviceCheckInfo;

class deviceCheckInfos extends Model
{
    /**
     * @var deviceCheckInfo[]
     */
    public $deviceCheckInfo;
    protected $_name = [
        'deviceCheckInfo' => 'DeviceCheckInfo',
    ];

    public function validate()
    {
        if (\is_array($this->deviceCheckInfo)) {
            Model::validateArray($this->deviceCheckInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceCheckInfo) {
            if (\is_array($this->deviceCheckInfo)) {
                $res['DeviceCheckInfo'] = [];
                $n1 = 0;
                foreach ($this->deviceCheckInfo as $item1) {
                    $res['DeviceCheckInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeviceCheckInfo'])) {
            if (!empty($map['DeviceCheckInfo'])) {
                $model->deviceCheckInfo = [];
                $n1 = 0;
                foreach ($map['DeviceCheckInfo'] as $item1) {
                    $model->deviceCheckInfo[$n1] = deviceCheckInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
