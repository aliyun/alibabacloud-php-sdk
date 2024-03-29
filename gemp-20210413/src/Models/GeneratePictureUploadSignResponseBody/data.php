<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureUploadSignResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureUploadSignResponseBody\data\files;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description accessKeyId
     *
     * @example LTAI1tEoRVPw8GMy1iLRCno7
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description oss bucket name
     *
     * @example gam-objects-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description files
     *
     * @var files[]
     */
    public $files;

    /**
     * @description policy
     *
     * @example eyJleHBpcmF0aW9uIjoiMjAyMS0wNy0xM1QwNDowOTo0NS4yODJaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsInByb2JsZW0iXV19
     *
     * @var string
     */
    public $policy;

    /**
     * @description signature
     *
     * @example SHqvIkwUNQd8Hervklir2K8U+ts=
     *
     * @var string
     */
    public $signature;

    /**
     * @description url
     *
     * @example https://gam-objects-bucket.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'accessKeyId' => 'accessKeyId',
        'bucketName'  => 'bucketName',
        'files'       => 'files',
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
        if (null !== $this->files) {
            $res['files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
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
