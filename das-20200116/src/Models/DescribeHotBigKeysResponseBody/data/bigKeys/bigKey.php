<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\bigKeys;

use AlibabaCloud\Tea\Model;

class bigKey extends Model
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
     * @description The key.
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
     * @description The ID of the data shard on the ApsaraDB for Redis instance.
     *
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

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
        'key'     => 'Key',
        'keyType' => 'KeyType',
        'nodeId'  => 'NodeId',
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
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bigKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
