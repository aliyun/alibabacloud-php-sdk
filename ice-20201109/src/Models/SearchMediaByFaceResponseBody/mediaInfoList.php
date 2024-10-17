<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByFaceResponseBody;

use AlibabaCloud\Tea\Model;

class mediaInfoList extends Model
{
    /**
     * @description The ID of the media asset.
     *
     * @example 3b187b3620c8490886cfc2a9578c****
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'mediaId' => 'MediaId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
