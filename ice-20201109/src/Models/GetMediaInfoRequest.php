<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetMediaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $inputURL;
    protected $_name = [
        'mediaId'  => 'MediaId',
        'inputURL' => 'InputURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }

        return $model;
    }
}
