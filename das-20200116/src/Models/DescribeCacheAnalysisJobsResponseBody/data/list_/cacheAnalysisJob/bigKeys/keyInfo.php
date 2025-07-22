<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data\list_\cacheAnalysisJob\bigKeys;

use AlibabaCloud\Tea\Model;

class keyInfo extends Model
{
    /**
     * @description The number of bytes that are occupied by the key.
     *
     * @example 12345
     *
     * @var int
     */
    public $bytes;

    /**
     * @description The number of elements in the key.
     *
     * @example 127
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the database.
     *
     * @example 0
     *
     * @var int
     */
    public $db;

    /**
     * @description The data type of the key.
     *
     * @example hashtable
     *
     * @var string
     */
    public $encoding;

    /**
     * @description The expiration period of the key. Unit: milliseconds. A value of 0 indicates that the key does not expire.
     *
     * @example 1596256542547
     *
     * @var int
     */
    public $expirationTimeMillis;

    /**
     * @description The name of the key.
     *
     * @example task_*****
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the data node on the instance.
     *
     * @example r-****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The data type of the instance.
     *
     * @example hash
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bytes' => 'Bytes',
        'count' => 'Count',
        'db' => 'Db',
        'encoding' => 'Encoding',
        'expirationTimeMillis' => 'ExpirationTimeMillis',
        'key' => 'Key',
        'nodeId' => 'NodeId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return keyInfo
     */
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
