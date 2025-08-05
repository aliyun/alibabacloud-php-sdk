<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteEduRoomRequest extends Model
{
    /**
     * @var string
     */
    public $eduRoomId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eduRoomId' => 'EduRoomId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eduRoomId) {
            $res['EduRoomId'] = $this->eduRoomId;
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
        if (isset($map['EduRoomId'])) {
            $model->eduRoomId = $map['EduRoomId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
