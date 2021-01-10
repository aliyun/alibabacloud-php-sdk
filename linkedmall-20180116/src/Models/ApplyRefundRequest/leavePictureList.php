<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundRequest;

use AlibabaCloud\Tea\Model;

class leavePictureList extends Model
{
    /**
     * @var string
     */
    public $picture;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'picture' => 'Picture',
        'desc'    => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picture) {
            $res['Picture'] = $this->picture;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (isset($map['Picture'])) {
            $model->picture = $map['Picture'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
