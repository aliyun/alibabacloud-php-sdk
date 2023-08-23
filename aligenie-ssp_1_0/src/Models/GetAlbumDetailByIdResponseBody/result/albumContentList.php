<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdResponseBody\result;

use AlibabaCloud\Tea\Model;

class albumContentList extends Model
{
    /**
     * @example 3分24秒
     *
     * @var string
     */
    public $duration;

    /**
     * @example 468009044
     *
     * @var string
     */
    public $id;

    /**
     * @example 1000
     *
     * @var string
     */
    public $orderIndex;

    /**
     * @example 001为什么肚子饿时会咕咕叫
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'duration'   => 'Duration',
        'id'         => 'Id',
        'orderIndex' => 'OrderIndex',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->orderIndex) {
            $res['OrderIndex'] = $this->orderIndex;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return albumContentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OrderIndex'])) {
            $model->orderIndex = $map['OrderIndex'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
