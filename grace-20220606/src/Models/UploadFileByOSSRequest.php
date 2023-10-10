<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\Tea\Model;

class UploadFileByOSSRequest extends Model
{
    /**
     * @example grace-storage
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example heap.bin
     *
     * @var string
     */
    public $displayName;

    /**
     * @description oss endpoint
     *
     * @example https://oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example heap.bin
     *
     * @var string
     */
    public $objectName;

    /**
     * @example thread_dump
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bucketName'  => 'bucketName',
        'displayName' => 'displayName',
        'endpoint'    => 'endpoint',
        'objectName'  => 'objectName',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->objectName) {
            $res['objectName'] = $this->objectName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFileByOSSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['objectName'])) {
            $model->objectName = $map['objectName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
