<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $bodyValue;

    /**
     * @var string
     */
    public $contentType;
    protected $_name = [
        'bodyValue'   => 'BodyValue',
        'contentType' => 'ContentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyValue) {
            $res['BodyValue'] = $this->bodyValue;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyValue'])) {
            $model->bodyValue = $map['BodyValue'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        return $model;
    }
}
