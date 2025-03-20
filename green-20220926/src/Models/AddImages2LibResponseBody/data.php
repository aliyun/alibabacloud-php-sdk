<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\AddImages2LibResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100001
     *
     * @var string
     */
    public $imgId;
    protected $_name = [
        'imgId' => 'ImgId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imgId) {
            $res['ImgId'] = $this->imgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImgId'])) {
            $model->imgId = $map['ImgId'];
        }

        return $model;
    }
}
