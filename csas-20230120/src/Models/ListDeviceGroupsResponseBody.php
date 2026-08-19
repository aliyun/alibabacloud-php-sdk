<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDeviceGroupsResponseBody\deviceGroups;

class ListDeviceGroupsResponseBody extends Model
{
    /**
     * @var deviceGroups[]
     */
    public $deviceGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'deviceGroups' => 'DeviceGroups',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->deviceGroups)) {
            Model::validateArray($this->deviceGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceGroups) {
            if (\is_array($this->deviceGroups)) {
                $res['DeviceGroups'] = [];
                $n1 = 0;
                foreach ($this->deviceGroups as $item1) {
                    $res['DeviceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['DeviceGroups'])) {
            if (!empty($map['DeviceGroups'])) {
                $model->deviceGroups = [];
                $n1 = 0;
                foreach ($map['DeviceGroups'] as $item1) {
                    $model->deviceGroups[$n1] = deviceGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
