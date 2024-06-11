<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteImagesShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $imageIdsShrink;
    protected $_name = [
        'imageIdsShrink' => 'ImageIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageIdsShrink) {
            $res['ImageIds'] = $this->imageIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImagesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageIds'])) {
            $model->imageIdsShrink = $map['ImageIds'];
        }

        return $model;
    }
}
