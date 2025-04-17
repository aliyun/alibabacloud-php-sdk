<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class CreateUploadVideoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uploadAddress;

    /**
     * @var string
     */
    public $uploadAuth;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth' => 'UploadAuth',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
