<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InitiateMultipartUploadHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $cacheControl;

    /**
     * @var string
     */
    public $contentDisposition;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string
     */
    public $expires;

    /**
     * @var string
     */
    public $forbidOverwrite;

    /**
     * @var string
     */
    public $sseDataEncryption;

    /**
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @var string
     */
    public $sseKeyId;

    /**
     * @var string
     */
    public $storageClass;

    /**
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
