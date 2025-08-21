<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\keyPrefixes;

use AlibabaCloud\Dara\Model;

class prefix extends Model
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
    public $keyNum;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bytes' => 'Bytes',
        'count' => 'Count',
        'keyNum' => 'KeyNum',
        'prefix' => 'Prefix',
        'type' => 'Type',
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
