<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadVideoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-04D5-D7393642****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The upload URL.
     *
     * > The returned upload URL is a Base64-encoded URL. You must decode the Base64-encoded URL before you use an SDK or call an API operation to upload media files. You need to parse UploadAddress only if you use the Object Storage Service (OSS) SDK or call an OSS API operation to upload media files.
     * @example eyJTZWN1cml0a2VuIjoiQ0FJU3p3TjF****
     *
     * @var string
     */
    public $uploadAddress;

    /**
     * @description The upload credential.
     *
     * > The returned upload credential is a Base64-encoded value. You must decode the Base64-encoded credential before you use an SDK or call an API operation to upload media files. You need to parse UploadAuth only if you use the OSS SDK or call an OSS API operation to upload media files.
     * @example eyJFbmRwb2ludCI6Imm****
     *
     * @var string
     */
    public $uploadAuth;

    /**
     * @description The ID of the audio or video file. VideoId can be used as a request parameter when you call an operation for media asset management, media processing, or media review.
     *
     * @example 93ab850b4f6f54b6e91d24d81d44****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth'    => 'UploadAuth',
        'videoId'       => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadAddress) {
            $res['UploadAddress'] = $this->uploadAddress;
        }
        if (null !== $this->uploadAuth) {
            $res['UploadAuth'] = $this->uploadAuth;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadVideoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadAddress'])) {
            $model->uploadAddress = $map['UploadAddress'];
        }
        if (isset($map['UploadAuth'])) {
            $model->uploadAuth = $map['UploadAuth'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
