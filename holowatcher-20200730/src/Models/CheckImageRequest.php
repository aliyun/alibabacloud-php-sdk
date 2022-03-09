<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CheckImageRequest extends Model
{
    /**
     * @var string
     */
    public $imagePath;
    protected $_name = [
        'imagePath' => 'ImagePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagePath) {
            $res['ImagePath'] = $this->imagePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagePath'])) {
            $model->imagePath = $map['ImagePath'];
        }

        return $model;
    }
}
