<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetMediaMarksRequest extends Model
{
    /**
     * @description The ID of the media asset.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The mark ID. You can specify multiple mark IDs separated with commas (,).
     *
     * @example mark-f82d*****4994b0915948ef7e16,mark-3d56d*****4c8fa9ae2a1f9e5d2d60
     *
     * @var string
     */
    public $mediaMarkIds;
    protected $_name = [
        'mediaId'      => 'MediaId',
        'mediaMarkIds' => 'MediaMarkIds',
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
        if (null !== $this->mediaMarkIds) {
            $res['MediaMarkIds'] = $this->mediaMarkIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaMarksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaMarkIds'])) {
            $model->mediaMarkIds = $map['MediaMarkIds'];
        }

        return $model;
    }
}
