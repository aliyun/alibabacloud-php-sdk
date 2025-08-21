<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeTopHotKeysResponseBody\data;

use AlibabaCloud\Dara\Model;

class hotKey extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $db;

    /**
     * @var string
     */
    public $hot;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var int
     */
    public $lfu;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $outBytes;
    protected $_name = [
        'category' => 'Category',
        'db' => 'Db',
        'hot' => 'Hot',
        'inBytes' => 'InBytes',
        'key' => 'Key',
        'keyType' => 'KeyType',
        'lfu' => 'Lfu',
        'nodeId' => 'NodeId',
        'outBytes' => 'OutBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }

        if (null !== $this->hot) {
            $res['Hot'] = $this->hot;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }

        if (null !== $this->lfu) {
            $res['Lfu'] = $this->lfu;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }

        if (isset($map['Hot'])) {
            $model->hot = $map['Hot'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        if (isset($map['Lfu'])) {
            $model->lfu = $map['Lfu'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        return $model;
    }
}
