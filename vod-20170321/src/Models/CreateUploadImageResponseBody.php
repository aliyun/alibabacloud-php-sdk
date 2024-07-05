<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageResponseBody extends Model
{
    /**
     * @description The OSS URL of the file. The URL does not contain the information used for URL signing. You can specify FileUrl when you call the [AddWatermark](https://help.aliyun.com/document_detail/98617.html) operation.
     *
     * @example http://example.aliyundoc.com/cover/2017-34DB-4F4C-9373-003AA060****.png
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The ID of the image file.
     *
     * @example 93ab850b4f6f46e91d24d81d4****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The URL of the image.
     *
     * > If the returned URL is inaccessible from a browser and the HTTP 403 status code is returned, the URL signing feature in ApsaraVideo VOD is enabled. To resolve this issue, you can disable the [URL signing](https://help.aliyun.com/document_detail/86090.html) feature or [generate a signed URL](https://help.aliyun.com/document_detail/57007.html).
     * @example http://example.aliyundoc.com/cover/2017-34DB-4F4C-9373-003AA060****.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-AEF6-D7393642****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The upload URL.
     *
     * > The returned upload URL is a Base64-encoded URL. You must decode the Base64-encoded URL before you use an SDK or call an API operation to upload auxiliary media assets. You need to parse UploadAddress only if you use the OSS SDK or call an OSS API operation to upload auxiliary media assets.
     * @example eyJTZWN1cmuIjoiQ0FJU3p3TjF****
     *
     * @var string
     */
    public $uploadAddress;

    /**
     * @description The upload credential.
     *
     * > The returned upload credential is a Base64-encoded value. You must decode the Base64-encoded credential before you use an SDK or call an API operation to upload auxiliary media assets. You need to parse UploadAuth only if you use the OSS SDK or call an OSS API operation to upload auxiliary media assets.
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
