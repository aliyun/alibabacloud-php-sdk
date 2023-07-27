<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InitiateMultipartUploadHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The caching behavior of the web page when the object is downloaded. For more information, see **[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**.
     * Default value: null.
     * @example private
     *
     * @var string
     */
    public $cacheControl;

    /**
     * @description The name of the object when the object is downloaded. For more information, see **[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**.
     * Default value: null.
     * @example attachment;filename=oss_download.jpg
     *
     * @var string
     */
    public $contentDisposition;

    /**
     * @description The content encoding format of the object when the object is downloaded. For more information, see **[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**.
     * Default value: null.
     * @example utf-8
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The expiration time of the request. Unit: milliseconds. For more information, see **[RFC 2616](https://www.ietf.org/rfc/rfc2616.txt)**.
     * Default value: null.
     * @example Fri, 28 Feb 2012 05:38:42 GMT
     *
     * @var string
     */
    public $expires;

    /**
     * @description Specifies whether the InitiateMultipartUpload operation overwrites the existing object that has the same name as the object that you want to upload. When versioning is enabled or suspended for the bucket to which you want to upload the object, the **x-oss-forbid-overwrite** header does not take effect. In this case, the InitiateMultipartUpload operation overwrites the existing object that has the same name as the object that you want to upload.
     * - If you do not specify the **x-oss-forbid-overwrite** header or set the **x-oss-forbid-overwrite** header to **false**, the object that is uploaded by calling the PutObject operation overwrites the existing object that has the same name.
     * - If the value of **x-oss-forbid-overwrite** is set to **true**, existing objects cannot be overwritten by objects that have the same names.
     *
     * If you specify the **x-oss-forbid-overwrite** request header, the queries per second (QPS) performance of OSS is degraded. If you want to use the **x-oss-forbid-overwrite** request header to perform a large number of operations (QPS greater than 1,000), contact technical support
     * @example true
     *
     * @var string
     */
    public $forbidOverwrite;

    /**
     * @description The algorithm that is used to encrypt the object that you want to upload. If this header is not specified, the object is encrypted by using AES-256. This header is valid only when **x-oss-server-side-encryption** is set to KMS.
     * Valid value: SM4.
     * @example SM4
     *
     * @var string
     */
    public $sseDataEncryption;

    /**
     * @description The server-side encryption method that is used to encrypt each part of the object that you want to upload.
     * Valid values: **AES256**, **KMS**, and **SM4**.
     * If you specify this header in the request, this header is included in the response. OSS uses the method specified by this header to encrypt each uploaded part. When you download the object, the x-oss-server-side-encryption header is included in the response and the header value is set to the algorithm that is used to encrypt the object.
     * @example AES256
     *
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @description The ID of the CMK that is managed by KMS.
     * This header is valid only when **x-oss-server-side-encryption** is set to KMS.
     * @example 9468da86-3509-4f8d-a61e-6eab1eac****
     *
     * @var string
     */
    public $sseKeyId;

    /**
     * @description The storage class of the bucket. Default value: Standard.  Valid values:
     *
     * - ColdArchive
     * @var string
     */
    public $storageClass;

    /**
     * @description The tag of the object. You can configure multiple tags for the object. Example: TagA=A&amp;TagB=B.
     * > The key and value of a tag must be URL-encoded. If a tag does not contain an equal sign (=), the value of the tag is considered an empty string.
     * @example a:1
     *
     * @var string
     */
    public $tagging;
    protected $_name = [
        'cacheControl'         => 'Cache-Control',
        'contentDisposition'   => 'Content-Disposition',
        'contentEncoding'      => 'Content-Encoding',
        'expires'              => 'Expires',
        'forbidOverwrite'      => 'x-oss-forbid-overwrite',
        'sseDataEncryption'    => 'x-oss-server-side-data-encryption',
        'serverSideEncryption' => 'x-oss-server-side-encryption',
        'sseKeyId'             => 'x-oss-server-side-encryption-key-id',
        'storageClass'         => 'x-oss-storage-class',
        'tagging'              => 'x-oss-tagging',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->cacheControl) {
            $res['Cache-Control'] = $this->cacheControl;
        }
        if (null !== $this->contentDisposition) {
            $res['Content-Disposition'] = $this->contentDisposition;
        }
        if (null !== $this->contentEncoding) {
            $res['Content-Encoding'] = $this->contentEncoding;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->forbidOverwrite) {
            $res['x-oss-forbid-overwrite'] = $this->forbidOverwrite;
        }
        if (null !== $this->sseDataEncryption) {
            $res['x-oss-server-side-data-encryption'] = $this->sseDataEncryption;
        }
        if (null !== $this->serverSideEncryption) {
            $res['x-oss-server-side-encryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->sseKeyId) {
            $res['x-oss-server-side-encryption-key-id'] = $this->sseKeyId;
        }
        if (null !== $this->storageClass) {
            $res['x-oss-storage-class'] = $this->storageClass;
        }
        if (null !== $this->tagging) {
            $res['x-oss-tagging'] = $this->tagging;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitiateMultipartUploadHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['Cache-Control'])) {
            $model->cacheControl = $map['Cache-Control'];
        }
        if (isset($map['Content-Disposition'])) {
            $model->contentDisposition = $map['Content-Disposition'];
        }
        if (isset($map['Content-Encoding'])) {
            $model->contentEncoding = $map['Content-Encoding'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['x-oss-forbid-overwrite'])) {
            $model->forbidOverwrite = $map['x-oss-forbid-overwrite'];
        }
        if (isset($map['x-oss-server-side-data-encryption'])) {
            $model->sseDataEncryption = $map['x-oss-server-side-data-encryption'];
        }
        if (isset($map['x-oss-server-side-encryption'])) {
            $model->serverSideEncryption = $map['x-oss-server-side-encryption'];
        }
        if (isset($map['x-oss-server-side-encryption-key-id'])) {
            $model->sseKeyId = $map['x-oss-server-side-encryption-key-id'];
        }
        if (isset($map['x-oss-storage-class'])) {
            $model->storageClass = $map['x-oss-storage-class'];
        }
        if (isset($map['x-oss-tagging'])) {
            $model->tagging = $map['x-oss-tagging'];
        }

        return $model;
    }
}
