<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\unexBigKeysOfBytes;

use AlibabaCloud\Dara\Model;

class keyInfo extends Model
{
    /**
     * @var int
     */
    public $bytes;
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $db;
    /**
     * @var string
     */
    public $encoding;
    /**
     * @var int
     */
    public $expirationTimeMillis;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bytes'                => 'Bytes',
        'count'                => 'Count',
        'db'                   => 'Db',
        'encoding'             => 'Encoding',
        'expirationTimeMillis' => 'ExpirationTimeMillis',
        'key'                  => 'Key',
        'nodeId'               => 'NodeId',
        'type'                 => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bytes) {
            $res['Bytes'] = $this->bytes;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }

        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }

        if (null !== $this->expirationTimeMillis) {
            $res['ExpirationTimeMillis'] = $this->expirationTimeMillis;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Bytes'])) {
            $model->bytes = $map['Bytes'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }

        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }

        if (isset($map['ExpirationTimeMillis'])) {
            $model->expirationTimeMillis = $map['ExpirationTimeMillis'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
