<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class LeavePictureList extends Model
{
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $picture;
    protected $_name = [
        'desc'    => 'desc',
        'picture' => 'picture',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->picture) {
            $res['picture'] = $this->picture;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['picture'])) {
            $model->picture = $map['picture'];
        }

        return $model;
    }
}
