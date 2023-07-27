<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutObjectHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example false
     *
     * @var bool
     */
    public $forbidOverwrite;

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
    public $sseDataEncryption;

    /**
     * @example AES256
     *
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @example 9468da86-3509-4f8d-a61e-6eab1eac****
     *
     * @var string
     */
    public $sseKeyId;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @example a:1
     *
     * @var string
     */
    public $tagging;
    protected $_name = [
        'forbidOverwrite'      => 'x-oss-forbid-overwrite',
        'metaData'             => 'x-oss-meta-*',
        'acl'                  => 'x-oss-object-acl',
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
        if (null !== $this->forbidOverwrite) {
            $res['x-oss-forbid-overwrite'] = $this->forbidOverwrite;
        }
        if (null !== $this->metaData) {
            $res['x-oss-meta-*'] = $this->metaData;
        }
        if (null !== $this->acl) {
            $res['x-oss-object-acl'] = $this->acl;
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
     * @return PutObjectHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-oss-forbid-overwrite'])) {
            $model->forbidOverwrite = $map['x-oss-forbid-overwrite'];
        }
        if (isset($map['x-oss-meta-*'])) {
            $model->metaData = $map['x-oss-meta-*'];
        }
        if (isset($map['x-oss-object-acl'])) {
            $model->acl = $map['x-oss-object-acl'];
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
