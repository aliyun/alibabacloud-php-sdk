<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $iQEMAqNqcGcDAQTNAyAFzQJYBtoAIYQBpAuf1dQCqrY4aIGemoBLONIDzwAAAXazCVSoBM0NyAcACA****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example 300
     *
     * @var int
     */
    public $urlExpireTime;
    protected $_name = [
        'mediaId'       => 'MediaId',
        'urlExpireTime' => 'UrlExpireTime',
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
        if (null !== $this->urlExpireTime) {
            $res['UrlExpireTime'] = $this->urlExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['UrlExpireTime'])) {
            $model->urlExpireTime = $map['UrlExpireTime'];
        }

        return $model;
    }
}
