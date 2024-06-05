<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UCObjectInfo extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $sha1;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'bucket'    => 'bucket',
        'md5'       => 'md5',
        'objectKey' => 'object_key',
        'region'    => 'region',
        'sha1'      => 'sha1',
        'size'      => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->md5) {
            $res['md5'] = $this->md5;
        }
        if (null !== $this->objectKey) {
            $res['object_key'] = $this->objectKey;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->sha1) {
            $res['sha1'] = $this->sha1;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UCObjectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['md5'])) {
            $model->md5 = $map['md5'];
        }
        if (isset($map['object_key'])) {
            $model->objectKey = $map['object_key'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['sha1'])) {
            $model->sha1 = $map['sha1'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
