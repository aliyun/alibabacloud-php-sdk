<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 上传Url
     *
     * @var string
     */
    public $uploadUrl;

    /**
     * @description 多媒体文件ID
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'uploadUrl' => 'UploadUrl',
        'mediaId'   => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
