<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos;
use AlibabaCloud\Tea\Model;

class roomTraverInfo extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $liveRoomNo;

    /**
     * @var string
     */
    public $roomTypeName;

    /**
     * @var traverInfos[]
     */
    public $traverInfos;
    protected $_name = [
        'liveRoomNo'   => 'live_room_no',
        'roomTypeName' => 'room_type_name',
        'traverInfos'  => 'traver_infos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRoomNo) {
            $res['live_room_no'] = $this->liveRoomNo;
        }
        if (null !== $this->roomTypeName) {
            $res['room_type_name'] = $this->roomTypeName;
        }
        if (null !== $this->traverInfos) {
            $res['traver_infos'] = [];
            if (null !== $this->traverInfos && \is_array($this->traverInfos)) {
                $n = 0;
                foreach ($this->traverInfos as $item) {
                    $res['traver_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomTraverInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['live_room_no'])) {
            $model->liveRoomNo = $map['live_room_no'];
        }
        if (isset($map['room_type_name'])) {
            $model->roomTypeName = $map['room_type_name'];
        }
        if (isset($map['traver_infos'])) {
            if (!empty($map['traver_infos'])) {
                $model->traverInfos = [];
                $n                  = 0;
                foreach ($map['traver_infos'] as $item) {
                    $model->traverInfos[$n++] = null !== $item ? traverInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
