<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\highTrafficKeys;

use AlibabaCloud\Dara\Model;

class highTrafficKey extends Model
{
    /**
     * @var int
     */
    public $db;

    /**
     * @var string
     */
    public $hot;

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

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $outBytes;
    protected $_name = [
        'db' => 'Db',
        'hot' => 'Hot',
        'key' => 'Key',
        'keyType' => 'KeyType',
        'nodeId' => 'NodeId',
        'size' => 'Size',
        'inBytes' => 'inBytes',
        'outBytes' => 'outBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->inBytes) {
            $res['inBytes'] = $this->inBytes;
        }

        if (null !== $this->outBytes) {
            $res['outBytes'] = $this->outBytes;
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

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['inBytes'])) {
            $model->inBytes = $map['inBytes'];
        }

        if (isset($map['outBytes'])) {
            $model->outBytes = $map['outBytes'];
        }

        return $model;
    }
}
