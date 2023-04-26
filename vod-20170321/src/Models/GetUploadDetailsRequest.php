<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetUploadDetailsRequest extends Model
{
    /**
     * @description The method that is used to upload the media file.
     *
     * @example 61ccbdb06fa83012be4d8083f6****,7d2fbc380b0e08e55f****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The upload details.
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'mediaIds'  => 'MediaIds',
        'mediaType' => 'MediaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        return $model;
    }
}
