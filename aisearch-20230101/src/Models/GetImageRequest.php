<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models;

use AlibabaCloud\Tea\Model;

class GetImageRequest extends Model
{
    /**
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;
    protected $_name = [
        'picName' => 'PicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }

        return $model;
    }
}
