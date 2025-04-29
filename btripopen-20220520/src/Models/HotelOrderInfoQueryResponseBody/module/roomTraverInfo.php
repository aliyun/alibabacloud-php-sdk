<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos;

class roomTraverInfo extends Model
{
    /**
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
        'liveRoomNo' => 'live_room_no',
        'roomTypeName' => 'room_type_name',
        'traverInfos' => 'traver_infos',
    ];

    public function validate()
    {
        if (\is_array($this->traverInfos)) {
            Model::validateArray($this->traverInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveRoomNo) {
            $res['live_room_no'] = $this->liveRoomNo;
        }

        if (null !== $this->roomTypeName) {
            $res['room_type_name'] = $this->roomTypeName;
        }

        if (null !== $this->traverInfos) {
            if (\is_array($this->traverInfos)) {
                $res['traver_infos'] = [];
                $n1 = 0;
                foreach ($this->traverInfos as $item1) {
                    $res['traver_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['live_room_no'])) {
            $model->liveRoomNo = $map['live_room_no'];
        }

        if (isset($map['room_type_name'])) {
            $model->roomTypeName = $map['room_type_name'];
        }

        if (isset($map['traver_infos'])) {
            if (!empty($map['traver_infos'])) {
                $model->traverInfos = [];
                $n1 = 0;
                foreach ($map['traver_infos'] as $item1) {
                    $model->traverInfos[$n1++] = traverInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
