<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetDownloadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $cdnUrl;

    /**
     * @var string
     */
    public $contentHash;

    /**
     * @var string
     */
    public $contentHashName;

    /**
     * @var string
     */
    public $crc64Hash;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $internalUrl;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'cdnUrl'          => 'cdn_url',
        'contentHash'     => 'content_hash',
        'contentHashName' => 'content_hash_name',
        'crc64Hash'       => 'crc64_hash',
        'expiration'      => 'expiration',
        'internalUrl'     => 'internal_url',
        'size'            => 'size',
        'url'             => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnUrl) {
            $res['cdn_url'] = $this->cdnUrl;
        }
        if (null !== $this->contentHash) {
            $res['content_hash'] = $this->contentHash;
        }
        if (null !== $this->contentHashName) {
            $res['content_hash_name'] = $this->contentHashName;
        }
        if (null !== $this->crc64Hash) {
            $res['crc64_hash'] = $this->crc64Hash;
        }
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }
        if (null !== $this->internalUrl) {
            $res['internal_url'] = $this->internalUrl;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDownloadUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cdn_url'])) {
            $model->cdnUrl = $map['cdn_url'];
        }
        if (isset($map['content_hash'])) {
            $model->contentHash = $map['content_hash'];
        }
        if (isset($map['content_hash_name'])) {
            $model->contentHashName = $map['content_hash_name'];
        }
        if (isset($map['crc64_hash'])) {
            $model->crc64Hash = $map['crc64_hash'];
        }
        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }
        if (isset($map['internal_url'])) {
            $model->internalUrl = $map['internal_url'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
