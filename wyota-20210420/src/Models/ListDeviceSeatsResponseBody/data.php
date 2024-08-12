<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceSeatsResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceSeatsResponseBody\data\deviceSeatDTOList;
use AlibabaCloud\Tea\Model;

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
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceSeatDTOList) {
            $res['DeviceSeatDTOList'] = [];
            if (null !== $this->deviceSeatDTOList && \is_array($this->deviceSeatDTOList)) {
                $n = 0;
                foreach ($this->deviceSeatDTOList as $item) {
                    $res['DeviceSeatDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceSeatDTOList'])) {
            if (!empty($map['DeviceSeatDTOList'])) {
                $model->deviceSeatDTOList = [];
                $n                        = 0;
                foreach ($map['DeviceSeatDTOList'] as $item) {
                    $model->deviceSeatDTOList[$n++] = null !== $item ? deviceSeatDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
