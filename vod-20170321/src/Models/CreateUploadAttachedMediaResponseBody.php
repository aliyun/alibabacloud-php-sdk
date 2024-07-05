<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadAttachedMediaResponseBody extends Model
{
    /**
     * @description The OSS URL of the file. The URL does not contain the information used for URL signing. You can set the FileUrl parameter to this URL when you call the [AddWatermark](https://help.aliyun.com/document_detail/98617.html) operation.
     *
     * @example https://****.oss-cn-shanghai.aliyuncs.com/watermark/****.mov
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The ID of the auxiliary media asset.
     *
     * @example 97dc17a5abc3668489b84ce9****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The URL of the auxiliary media asset. If a domain name for Alibaba Cloud CDN (CDN) is specified, a CDN URL is returned. Otherwise, an OSS URL is returned.
     *
     * >  If you enable the URL signing feature of ApsaraVideo VOD, you may be unable to access the returned URL of the auxiliary media asset by using a browser and the HTTP status code 403 may be returned. You can disable the [URL signing](https://help.aliyun.com/document_detail/86090.html) feature or [generate an authentication signature](https://help.aliyun.com/document_detail/57007.html).
     * @example http://example.aliyundoc.com/watermark/****.mov?auth_key=****
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description The ID of the request.
     *
     * @example 73254DE5-F260-4720-D06856B63C01****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The upload URL.
     *
     * >  The upload URL returned by this operation is Base64-encoded. Before you can use an SDK or an API operation to upload a media asset based on the upload URL, you must decode the upload URL by using the Base64 algorithm. You must parse the upload URL only if you use native OSS SDKs or OSS API for uploads.
     * @example LWNuLXNoYW5naGFpLmFsaXl1b****
     *
     * @var string
     */
    public $uploadAddress;

    /**
     * @description The upload credential.
     *
     * >  The upload credential returned by this operation is Base64-encoded. Before you can use an SDK or an API operation to upload a media asset based on the upload credential, you must decode the upload credential by using the Base64 algorithm. You must parse the upload credential only if you use native OSS SDKs or OSS API for uploads.
     * @example UzFnUjFxNkZ0NUIZTaklyNWJoQ00zdHF****
     *
     * @var string
     */
    public $uploadAuth;
    protected $_name = [
        'fileURL'       => 'FileURL',
        'mediaId'       => 'MediaId',
        'mediaURL'      => 'MediaURL',
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
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
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
     * @return CreateUploadAttachedMediaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
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
