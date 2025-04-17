<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class CreateUploadImageResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageURL;

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
    protected $_name = [
        'fileURL' => 'FileURL',
        'imageId' => 'ImageId',
        'imageURL' => 'ImageURL',
        'requestId' => 'RequestId',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth' => 'UploadAuth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadAddress) {
            $res['UploadAddress'] = $this->uploadAddress;
        }

        if (null !== $this->uploadAuth) {
            $res['UploadAuth'] = $this->uploadAuth;
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UploadAddress'])) {
            $model->uploadAddress = $map['UploadAddress'];
        }

        if (isset($map['UploadAuth'])) {
            $model->uploadAuth = $map['UploadAuth'];
        }

        return $model;
    }
}
