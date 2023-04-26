<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshUploadVideoResponseBody extends Model
{
    /**
     * @description Obtains a new upload credential after the video upload times out.
     *
     * @example 25818875-5F78-4A43-7DF6-D7393642****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example eyJTZWN1cml0eVRiQ0FJU3p3TjFxNkZ0NUIyeW****
     *
     * @var string
     */
    public $uploadAddress;

    /**
     * @example FJU3p3TZ0NUIyeW****
     *
     * @var string
     */
    public $uploadAuth;

    /**
     * @example c6a23a870c8c4ffcd40cbd381333****
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
     * @return RefreshUploadVideoResponseBody
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
