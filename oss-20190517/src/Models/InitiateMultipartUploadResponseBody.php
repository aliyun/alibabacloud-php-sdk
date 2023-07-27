<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InitiateMultipartUploadResponseBody extends Model
{
    /**
     * @description The name of the bucket to which the object is uploaded by the multipart upload task.
     *
     * @example examplebucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The encoding type of the object name in the response. If the encoding-type parameter is specified in the request, the object name in the response is encoded.
     *
     * @example url
     *
     * @var string
     */
    public $encodingType;

    /**
     * @description The name of the object that is uploaded by the multipart upload task.
     *
     * @example multipart.data
     *
     * @var string
     */
    public $key;

    /**
     * @description The Upload ID that uniquely identifies the multipart upload task. The Upload ID is used to call UploadPart and CompleteMultipartUpload later.
     *
     * @example 0004B9894A22E5B1888A1E29F823****
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'bucket'       => 'Bucket',
        'encodingType' => 'EncodingType',
        'key'          => 'Key',
        'uploadId'     => 'UploadId',
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
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitiateMultipartUploadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['EncodingType'])) {
            $model->encodingType = $map['EncodingType'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        return $model;
    }
}
