<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyRefundRequest;

use AlibabaCloud\Tea\Model;

class leavePictureList extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example https://lm-dk.oss-cn-hangzhou.aliyuncs.com/1635738731345.png
     *
     * @var string
     */
    public $picture;
    protected $_name = [
        'desc'    => 'Desc',
        'picture' => 'Picture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->picture) {
            $res['Picture'] = $this->picture;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return leavePictureList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Picture'])) {
            $model->picture = $map['Picture'];
        }

        return $model;
    }
}
