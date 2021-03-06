<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ErasePersonAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var string
     */
    public $userMask;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'userMask'       => 'UserMask',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('userMask', $this->userMask, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->userMask) {
            $res['UserMask'] = $this->userMask;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ErasePersonAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['UserMask'])) {
            $model->userMask = $map['UserMask'];
        }

        return $model;
    }
}
