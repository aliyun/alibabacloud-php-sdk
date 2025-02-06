<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models;

use AlibabaCloud\Dara\Model;

class SearchFaceRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $image;
    protected $_name = [
        'groupId' => 'GroupId',
        'image'   => 'Image',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        return $model;
    }
}
