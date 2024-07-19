<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest\files;

use AlibabaCloud\Tea\Model;

class ossObject extends Model
{
    /**
     * @example bucket1
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example oss/dic_0.dic
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'bucketName' => 'bucketName',
        'key'        => 'key',
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
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
