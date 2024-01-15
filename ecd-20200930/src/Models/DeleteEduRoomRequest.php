<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

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
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteEduRoomRequest
     */
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
