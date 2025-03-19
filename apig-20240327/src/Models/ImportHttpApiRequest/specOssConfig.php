<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest;

use AlibabaCloud\Tea\Model;

class specOssConfig extends Model
{
    /**
     * @description The name of the Object Storage Service (OSS) bucket that stores the dictionary file.
     *
     * @example api-1
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The file path.
     *
     * @example /test/swagger.json
     *
     * @var string
     */
    public $objectKey;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bucketName' => 'bucketName',
        'objectKey' => 'objectKey',
        'regionId' => 'regionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->objectKey) {
            $res['objectKey'] = $this->objectKey;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specOssConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['objectKey'])) {
            $model->objectKey = $map['objectKey'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
