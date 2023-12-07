<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class IncreaseInstanceRequest extends Model
{
    /**
     * @description The name of the Object Storage Service (OSS) bucket.
     *
     * >  The bucket must be in the same region as the Image Search instance.
     * @example bucketName
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The callback address.
     *
     * @example http://xxxxx
     *
     * @var string
     */
    public $callbackAddress;

    /**
     * @description The name of the instance.
     *
     * @example imagesearchName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The absolute path to the increment.meta file in the bucket. The path must start with a forward slash (/) and cannot end with a forward slash (/).
     *
     * @example /xxx/xxx
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'bucketName'      => 'BucketName',
        'callbackAddress' => 'CallbackAddress',
        'instanceName'    => 'InstanceName',
        'path'            => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->callbackAddress) {
            $res['CallbackAddress'] = $this->callbackAddress;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncreaseInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CallbackAddress'])) {
            $model->callbackAddress = $map['CallbackAddress'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
