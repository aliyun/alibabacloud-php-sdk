<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DeleteImagesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageIdsShrink;
    protected $_name = [
        'imageIdsShrink' => 'ImageIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageIdsShrink) {
            $res['ImageIds'] = $this->imageIdsShrink;
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
        if (isset($map['ImageIds'])) {
            $model->imageIdsShrink = $map['ImageIds'];
        }

        return $model;
    }
}
