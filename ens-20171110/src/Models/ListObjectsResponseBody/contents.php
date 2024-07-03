<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsResponseBody;

use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @description The entity tag (ETag). When an object is created, an ETag is created to identify the content of the object.
     *
     *   For an object that is created by calling the PutObject operation, the ETag value of the object is the MD5 hash of the object content.
     *   For an object that is not created by calling the PutObject operation, the ETag value of the object is the UUID of the object content.
     *   The ETag of an object can be used to check whether the object content is modified. However, we recommend that you use the MD5 hash of an object rather than the ETag value of the object to verify data integrity.
     *
     * @example 5B3C1A2E053D763E1B002CC607C5****
     *
     * @var string
     */
    public $ETag;

    /**
     * @description The name of the object.
     *
     * @example ceshi.txt1617853706546
     *
     * @var string
     */
    public $key;

    /**
     * @description The time when the object was last modified.
     *
     * @example 2021-04-08T03:48:47.488Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The size of the returned object. Unit: bytes.
     *
     * @example 15
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'ETag'         => 'ETag',
        'key'          => 'Key',
        'lastModified' => 'LastModified',
        'size'         => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
