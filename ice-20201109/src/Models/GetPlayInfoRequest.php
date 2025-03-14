<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetPlayInfoRequest extends Model
{
    /**
     * @description The input URL that you specified for the media asset when you registered the media asset. For more information, see [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html).
     *
     * >  You must specify at least one of the MediaId and InputURL parameters.
     *
     * @var string
     */
    public $inputURL;

    /**
     * @description The ID of the media asset.
     *
     * >  You must specify at least one of the MediaId and InputURL parameters.
     *
     * @example 86434e152b7d4f20be480574439fe***
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'inputURL' => 'InputURL',
        'mediaId' => 'MediaId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
