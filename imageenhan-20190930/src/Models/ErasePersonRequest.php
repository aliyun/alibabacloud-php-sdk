<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ErasePersonRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $userMask;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'userMask' => 'UserMask',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('userMask', $this->userMask, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->userMask) {
            $res['UserMask'] = $this->userMask;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ErasePersonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['UserMask'])) {
            $model->userMask = $map['UserMask'];
        }

        return $model;
    }
}
