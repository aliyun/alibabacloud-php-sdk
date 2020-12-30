<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadAttachedMediaResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $mediaURL;

    /**
     * @var string
     */
    public $uploadAddress;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $uploadAuth;
    protected $_name = [
        'fileURL'       => 'FileURL',
        'mediaURL'      => 'MediaURL',
        'uploadAddress' => 'UploadAddress',
        'requestId'     => 'RequestId',
        'mediaId'       => 'MediaId',
        'uploadAuth'    => 'UploadAuth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
        }
        if (null !== $this->uploadAddress) {
            $res['UploadAddress'] = $this->uploadAddress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->uploadAuth) {
            $res['UploadAuth'] = $this->uploadAuth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadAttachedMediaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
        }
        if (isset($map['UploadAddress'])) {
            $model->uploadAddress = $map['UploadAddress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['UploadAuth'])) {
            $model->uploadAuth = $map['UploadAuth'];
        }

        return $model;
    }
}
