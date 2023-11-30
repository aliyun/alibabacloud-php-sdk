<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetDownloadUrlResponseBody extends Model
{
    /**
     * @description The download URL of a file that is downloaded by using Alibaba Cloud CDN.
     *
     * @example https://data-cdn.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt
     *
     * @var string
     */
    public $cdnUrl;

    /**
     * @description The hash value of the file content.
     *
     * @example EA4942AA8761213890A5C386F88E6464D2C31CA1
     *
     * @var string
     */
    public $contentHash;

    /**
     * @description The name of the algorithm that is used to calculate the hash value of the file content.
     *
     * @example sha1
     *
     * @var string
     */
    public $contentHashName;

    /**
     * @description The hash value calculated by using 64-bit cyclic redundancy check (CRC-64).
     *
     * @example 5498595269368962671
     *
     * @var string
     */
    public $crc64Hash;

    /**
     * @description The time when the download URL expires.
     *
     * @example 2022-01-02T15:04:05.999Z07:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The download URL of a file that is downloaded over a virtual private cloud (VPC).
     *
     * @example https://data-vpc.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt
     *
     * @var string
     */
    public $internalUrl;

    /**
     * @description The size of the file. Unit: bytes.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The download URL of a file that is downloaded over the Internet.
     *
     * @example https://data.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt
     *
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
