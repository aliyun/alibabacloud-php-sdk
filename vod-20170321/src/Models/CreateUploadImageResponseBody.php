<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileURL;

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
    public $uploadAuth;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'fileURL'       => 'FileURL',
        'uploadAddress' => 'UploadAddress',
        'requestId'     => 'RequestId',
        'uploadAuth'    => 'UploadAuth',
        'imageId'       => 'ImageId',
        'imageURL'      => 'ImageURL',
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
        if (null !== $this->uploadAddress) {
            $res['UploadAddress'] = $this->uploadAddress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadAuth) {
            $res['UploadAuth'] = $this->uploadAuth;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['UploadAddress'])) {
            $model->uploadAddress = $map['UploadAddress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadAuth'])) {
            $model->uploadAuth = $map['UploadAuth'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
