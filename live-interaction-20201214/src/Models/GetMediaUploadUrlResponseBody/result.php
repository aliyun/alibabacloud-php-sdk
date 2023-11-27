<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example $iQEMAqNqcGcDAQTNAyAFzQJYBtoAIYQBpAuf1dQCqrY4aIGemoBLONIDzwAAAXazCVSoBM0NyAcACA****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example http://oss-aaajff.aliyun.com/aa****
     *
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'mediaId'   => 'MediaId',
        'uploadUrl' => 'UploadUrl',
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
        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
