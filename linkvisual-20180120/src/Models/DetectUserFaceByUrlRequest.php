<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DetectUserFaceByUrlRequest extends Model
{
    /**
     * @example http://xxx.xxx.com/xxx/face/1.jpg
     *
     * @var string
     */
    public $facePicUrl;
    protected $_name = [
        'facePicUrl' => 'FacePicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facePicUrl) {
            $res['FacePicUrl'] = $this->facePicUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectUserFaceByUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FacePicUrl'])) {
            $model->facePicUrl = $map['FacePicUrl'];
        }

        return $model;
    }
}
