<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @var availableZoneList[]
     */
    public $availableZoneList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableZoneList' => 'AvailableZoneList',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->availableZoneList)) {
            Model::validateArray($this->availableZoneList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZoneList) {
            if (\is_array($this->availableZoneList)) {
                $res['AvailableZoneList'] = [];
                $n1 = 0;
                foreach ($this->availableZoneList as $item1) {
                    $res['AvailableZoneList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AvailableZoneList'])) {
            if (!empty($map['AvailableZoneList'])) {
                $model->availableZoneList = [];
                $n1 = 0;
                foreach ($map['AvailableZoneList'] as $item1) {
                    $model->availableZoneList[$n1++] = availableZoneList::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
