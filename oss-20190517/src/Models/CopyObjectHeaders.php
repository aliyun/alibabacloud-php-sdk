<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CopyObjectHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $copySource;

    /**
     * @var string
     */
    public $copySourceIfMatch;

    /**
     * @var string
     */
    public $copySourceIfModifiedSince;

    /**
     * @var string
     */
    public $copySourceIfNoneMatch;

    /**
     * @var string
     */
    public $copySourceIfUnmodifiedSince;

    /**
     * @var string
     */
    public $forbidOverwrite;

    /**
     * @var string[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $metadataDirective;

    /**
     * @var string
     */
    public $acl;

    /**
     * @var string
     */
    public $sse;

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

    /**
     * @var string
     */
    public $xOssTaggingDirective;
    protected $_name = [
        'copySource'                  => 'x-oss-copy-source',
        'copySourceIfMatch'           => 'x-oss-copy-source-if-match',
        'copySourceIfModifiedSince'   => 'x-oss-copy-source-if-modified-since',
        'copySourceIfNoneMatch'       => 'x-oss-copy-source-if-none-match',
        'copySourceIfUnmodifiedSince' => 'x-oss-copy-source-if-unmodified-since',
        'forbidOverwrite'             => 'x-oss-forbid-overwrite',
        'metaData'                    => 'x-oss-meta-*',
        'metadataDirective'           => 'x-oss-metadata-directive',
        'acl'                         => 'x-oss-object-acl',
        'sse'                         => 'x-oss-server-side-encryption',
        'sseKeyId'                    => 'x-oss-server-side-encryption-key-id',
        'storageClass'                => 'x-oss-storage-class',
        'tagging'                     => 'x-oss-tagging',
        'xOssTaggingDirective'        => 'x-oss-tagging-directive',
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
        if (null !== $this->copySource) {
            $res['x-oss-copy-source'] = $this->copySource;
        }
        if (null !== $this->copySourceIfMatch) {
            $res['x-oss-copy-source-if-match'] = $this->copySourceIfMatch;
        }
        if (null !== $this->copySourceIfModifiedSince) {
            $res['x-oss-copy-source-if-modified-since'] = $this->copySourceIfModifiedSince;
        }
        if (null !== $this->copySourceIfNoneMatch) {
            $res['x-oss-copy-source-if-none-match'] = $this->copySourceIfNoneMatch;
        }
        if (null !== $this->copySourceIfUnmodifiedSince) {
            $res['x-oss-copy-source-if-unmodified-since'] = $this->copySourceIfUnmodifiedSince;
        }
        if (null !== $this->forbidOverwrite) {
            $res['x-oss-forbid-overwrite'] = $this->forbidOverwrite;
        }
        if (null !== $this->metaData) {
            $res['x-oss-meta-*'] = $this->metaData;
        }
        if (null !== $this->metadataDirective) {
            $res['x-oss-metadata-directive'] = $this->metadataDirective;
        }
        if (null !== $this->acl) {
            $res['x-oss-object-acl'] = $this->acl;
        }
        if (null !== $this->sse) {
            $res['x-oss-server-side-encryption'] = $this->sse;
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
        if (null !== $this->xOssTaggingDirective) {
            $res['x-oss-tagging-directive'] = $this->xOssTaggingDirective;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyObjectHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-oss-copy-source'])) {
            $model->copySource = $map['x-oss-copy-source'];
        }
        if (isset($map['x-oss-copy-source-if-match'])) {
            $model->copySourceIfMatch = $map['x-oss-copy-source-if-match'];
        }
        if (isset($map['x-oss-copy-source-if-modified-since'])) {
            $model->copySourceIfModifiedSince = $map['x-oss-copy-source-if-modified-since'];
        }
        if (isset($map['x-oss-copy-source-if-none-match'])) {
            $model->copySourceIfNoneMatch = $map['x-oss-copy-source-if-none-match'];
        }
        if (isset($map['x-oss-copy-source-if-unmodified-since'])) {
            $model->copySourceIfUnmodifiedSince = $map['x-oss-copy-source-if-unmodified-since'];
        }
        if (isset($map['x-oss-forbid-overwrite'])) {
            $model->forbidOverwrite = $map['x-oss-forbid-overwrite'];
        }
        if (isset($map['x-oss-meta-*'])) {
            $model->metaData = $map['x-oss-meta-*'];
        }
        if (isset($map['x-oss-metadata-directive'])) {
            $model->metadataDirective = $map['x-oss-metadata-directive'];
        }
        if (isset($map['x-oss-object-acl'])) {
            $model->acl = $map['x-oss-object-acl'];
        }
        if (isset($map['x-oss-server-side-encryption'])) {
            $model->sse = $map['x-oss-server-side-encryption'];
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
        if (isset($map['x-oss-tagging-directive'])) {
            $model->xOssTaggingDirective = $map['x-oss-tagging-directive'];
        }

        return $model;
    }
}
