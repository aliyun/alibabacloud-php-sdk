<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomLocation extends Model
{
    /**
     * @example xx市xx区xx街道xx号
     *
     * @var string
     */
    public $desc;

    /**
     * @example xxx公司
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'desc' => 'Desc',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomLocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
