<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CompleteMultipartUploadResponseBody extends Model
{
    /**
     * @example oss-example
     *
     * @var string
     */
    public $bucket;

    /**
     * @example B864DB6A936D376F9F8D3ED3BBE540****
     *
     * @var string
     */
    public $ETag;

    /**
     * @example url
     *
     * @var string
     */
    public $encodingType;

    /**
     * @example multipart.data
     *
     * @var string
     */
    public $key;

    /**
     * @example http://oss-example.oss-cn-hangzhou.aliyuncs.com /multipart.data
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'bucket'       => 'Bucket',
        'ETag'         => 'ETag',
        'encodingType' => 'EncodingType',
        'key'          => 'Key',
        'location'     => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteMultipartUploadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['EncodingType'])) {
            $model->encodingType = $map['EncodingType'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
