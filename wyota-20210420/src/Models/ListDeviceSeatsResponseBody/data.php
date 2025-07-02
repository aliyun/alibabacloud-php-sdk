<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceSeatsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceSeatsResponseBody\data\deviceSeatDTOList;

class data extends Model
{
    /**
     * @var deviceSeatDTOList[]
     */
    public $deviceSeatDTOList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'deviceSeatDTOList' => 'DeviceSeatDTOList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->deviceSeatDTOList)) {
            Model::validateArray($this->deviceSeatDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceSeatDTOList) {
            if (\is_array($this->deviceSeatDTOList)) {
                $res['DeviceSeatDTOList'] = [];
                $n1 = 0;
                foreach ($this->deviceSeatDTOList as $item1) {
                    $res['DeviceSeatDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DeviceSeatDTOList'])) {
            if (!empty($map['DeviceSeatDTOList'])) {
                $model->deviceSeatDTOList = [];
                $n1 = 0;
                foreach ($map['DeviceSeatDTOList'] as $item1) {
                    $model->deviceSeatDTOList[$n1] = deviceSeatDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
