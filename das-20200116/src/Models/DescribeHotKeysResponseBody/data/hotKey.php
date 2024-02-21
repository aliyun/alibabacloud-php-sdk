<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponseBody\data;

use AlibabaCloud\Tea\Model;

class hotKey extends Model
{
    /**
     * @description The database in which the key is stored.
     *
     * @example 0
     *
     * @var int
     */
    public $db;

    /**
     * @description The frequency at which the key is accessed, which indicates the queries per second (QPS) of the key.
     *
     * @example 5500~6000
     *
     * @var string
     */
    public $hot;

    /**
     * @description The name of the key.
     *
     * @example abc:def:eng
     *
     * @var string
     */
    public $key;

    /**
     * @description The type of the key.
     *
     * @example zset
     *
     * @var string
     */
    public $keyType;

    /**
     * @description The number of elements in the key.
     *
     * @example 2
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'db'      => 'Db',
        'hot'     => 'Hot',
        'key'     => 'Key',
        'keyType' => 'KeyType',
        'size'    => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }
        if (null !== $this->hot) {
            $res['Hot'] = $this->hot;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }
        if (isset($map['Hot'])) {
            $model->hot = $map['Hot'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
