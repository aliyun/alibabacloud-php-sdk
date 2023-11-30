<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class Store extends Model
{
    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $ownership;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'basePath'  => 'base_path',
        'bucket'    => 'bucket',
        'endpoint'  => 'endpoint',
        'location'  => 'location',
        'ownership' => 'ownership',
        'roleArn'   => 'role_arn',
        'storeId'   => 'store_id',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['base_path'] = $this->basePath;
        }
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->ownership) {
            $res['ownership'] = $this->ownership;
        }
        if (null !== $this->roleArn) {
            $res['role_arn'] = $this->roleArn;
        }
        if (null !== $this->storeId) {
            $res['store_id'] = $this->storeId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Store
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['base_path'])) {
            $model->basePath = $map['base_path'];
        }
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['ownership'])) {
            $model->ownership = $map['ownership'];
        }
        if (isset($map['role_arn'])) {
            $model->roleArn = $map['role_arn'];
        }
        if (isset($map['store_id'])) {
            $model->storeId = $map['store_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
