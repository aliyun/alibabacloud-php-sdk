<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeVietnamIdentityCardAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageUrlObject;
    protected $_name = [
        'imageUrlObject' => 'ImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVietnamIdentityCardAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }

        return $model;
    }
}
