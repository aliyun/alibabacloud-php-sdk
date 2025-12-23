<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\largeKeys;

use AlibabaCloud\Dara\Model;

class largeKey extends Model
{
    /**
     * @var string
     */
    public $dataSize;

    /**
     * @var string
     */
    public $db;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'dataSize' => 'DataSize',
        'db' => 'Db',
        'key' => 'Key',
        'keyType' => 'KeyType',
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

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

        return $model;
    }
}
