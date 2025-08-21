<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdResponseBody\result;

use AlibabaCloud\Dara\Model;

class albumContentList extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $orderIndex;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'duration' => 'Duration',
        'id' => 'Id',
        'orderIndex' => 'OrderIndex',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
