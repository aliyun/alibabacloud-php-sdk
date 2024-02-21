<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\keyPrefixes;

use AlibabaCloud\Tea\Model;

class prefix extends Model
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
     * @description The number of keys that contain the prefix.
     *
     * @example 123
     *
     * @var int
     */
    public $keyNum;

    /**
     * @description The prefix of the key.
     *
     * @example task_
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The data type of the instance.
     *
     * @example hash
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bytes'  => 'Bytes',
        'count'  => 'Count',
        'keyNum' => 'KeyNum',
        'prefix' => 'Prefix',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytes) {
            $res['Bytes'] = $this->bytes;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->keyNum) {
            $res['KeyNum'] = $this->keyNum;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefix
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
        if (isset($map['KeyNum'])) {
            $model->keyNum = $map['KeyNum'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
