<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class LeavePictureList extends Model
{
    /**
     * @example 退款凭证
     *
     * @var string
     */
    public $desc;

    /**
     * @example https://
     *
     * @var string
     */
    public $picture;
    protected $_name = [
        'desc'    => 'desc',
        'picture' => 'picture',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return LeavePictureList
     */
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
