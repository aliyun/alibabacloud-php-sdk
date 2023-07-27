<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class AppendObjectHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example no-cache
     *
     * @var string
     */
    public $cacheControl;

    /**
     * @example attachment;filename=oss_download.jpg
     *
     * @var string
     */
    public $contentDisposition;

    /**
     * @example utf-8
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @example ohhnqLBJFiKkPSBO1eNaUA==
     *
     * @var string
     */
    public $contentMD5;

    /**
     * @example Wed, 08 Jul 2015 16:57:01 GMT
     *
     * @var string
     */
    public $expires;

    /**
     * @example x-oss-meta-location
     *
     * @var string[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $acl;

    /**
     * @example AES256
     *
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'cacheControl'         => 'Cache-Control',
        'contentDisposition'   => 'Content-Disposition',
        'contentEncoding'      => 'Content-Encoding',
        'contentMD5'           => 'Content-MD5',
        'expires'              => 'Expires',
        'metaData'             => 'x-oss-meta-*',
        'acl'                  => 'x-oss-object-acl',
        'serverSideEncryption' => 'x-oss-server-side-encryption',
        'storageClass'         => 'x-oss-storage-class',
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
        if (null !== $this->contentMD5) {
            $res['Content-MD5'] = $this->contentMD5;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->metaData) {
            $res['x-oss-meta-*'] = $this->metaData;
        }
        if (null !== $this->acl) {
            $res['x-oss-object-acl'] = $this->acl;
        }
        if (null !== $this->serverSideEncryption) {
            $res['x-oss-server-side-encryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->storageClass) {
            $res['x-oss-storage-class'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppendObjectHeaders
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
        if (isset($map['Content-MD5'])) {
            $model->contentMD5 = $map['Content-MD5'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['x-oss-meta-*'])) {
            $model->metaData = $map['x-oss-meta-*'];
        }
        if (isset($map['x-oss-object-acl'])) {
            $model->acl = $map['x-oss-object-acl'];
        }
        if (isset($map['x-oss-server-side-encryption'])) {
            $model->serverSideEncryption = $map['x-oss-server-side-encryption'];
        }
        if (isset($map['x-oss-storage-class'])) {
            $model->storageClass = $map['x-oss-storage-class'];
        }

        return $model;
    }
}
