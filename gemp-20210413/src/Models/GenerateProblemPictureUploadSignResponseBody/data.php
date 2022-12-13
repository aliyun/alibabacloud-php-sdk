<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureUploadSignResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description ossaccessKeyId
     *
     * @example XXXXXXXH8GMy1iLRCno7
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description oss bucket name
     *
     * @example xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description oss key
     *
     * @example problem/xxxxxxxxxxxxxxxx1-b3185d529277
     *
     * @var string
     */
    public $key;

    /**
     * @description policy
     *
     * @example eyJleHBpcmF0a0p0IjoiMjAyMS0wNy0xM1QwNDowOTo0NS4yODJaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsInByb2JsZW0iXV19
     *
     * @var string
     */
    public $policy;

    /**
     * @description signature
     *
     * @example SHqvIkwUNQd0o0rvklir2K8U+ts=
     *
     * @var string
     */
    public $signature;

    /**
     * @description url
     *
     * @example https://xxx-xxx-bucket.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'accessKeyId' => 'accessKeyId',
        'bucketName'  => 'bucketName',
        'key'         => 'key',
        'policy'      => 'policy',
        'signature'   => 'signature',
        'url'         => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
