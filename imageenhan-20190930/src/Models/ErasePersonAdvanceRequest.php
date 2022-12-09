<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ErasePersonAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var Stream
     */
    public $userMaskObject;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'userMaskObject' => 'UserMask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->userMaskObject) {
            $res['UserMask'] = $this->userMaskObject;
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
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['UserMask'])) {
            $model->userMaskObject = $map['UserMask'];
        }

        return $model;
    }
}
