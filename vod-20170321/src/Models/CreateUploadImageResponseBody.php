<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageResponseBody extends Model
{
    /**
     * @example http://example.aliyundoc.com/cover/2017-34DB-4F4C-9373-003AA060****.png
     *
     * @var string
     */
    public $fileURL;

    /**
     * @example 93ab850b4f6f46e91d24d81d4****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example http://example.aliyundoc.com/cover/2017-34DB-4F4C-9373-003AA060****.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example 25818875-5F78-AEF6-D7393642****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example eyJTZWN1cmuIjoiQ0FJU3p3TjF****
     *
     * @var string
     */
    public $uploadAddress;

    /**
     * @example eyJFbmmRCI6Im****
     *
     * @var string
     */
    public $uploadAuth;
    protected $_name = [
        'fileURL'       => 'FileURL',
        'imageId'       => 'ImageId',
        'imageURL'      => 'ImageURL',
        'requestId'     => 'RequestId',
        'uploadAddress' => 'UploadAddress',
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
