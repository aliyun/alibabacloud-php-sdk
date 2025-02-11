<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponseBody\data;

use AlibabaCloud\Dara\Model;

class hotKey extends Model
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

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
