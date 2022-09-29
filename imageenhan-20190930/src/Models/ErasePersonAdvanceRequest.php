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
     * @var string
     */
    public $userMask;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'userMask'       => 'UserMask',
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
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['UserMask'])) {
            $model->userMask = $map['UserMask'];
        }

        return $model;
    }
}
