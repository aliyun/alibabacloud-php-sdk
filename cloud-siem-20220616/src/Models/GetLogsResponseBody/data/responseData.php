<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $completeOrNot;

    /**
     * @example 28
     *
     * @var int
     */
    public $cost;

    /**
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasSql;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var mixed[]
     */
    public $lines;
    protected $_name = [
        'completeOrNot' => 'CompleteOrNot',
        'cost'          => 'Cost',
        'count'         => 'Count',
        'hasSql'        => 'HasSql',
        'keys'          => 'Keys',
        'lines'         => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeOrNot) {
            $res['CompleteOrNot'] = $this->completeOrNot;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->hasSql) {
            $res['HasSql'] = $this->hasSql;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteOrNot'])) {
            $model->completeOrNot = $map['CompleteOrNot'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HasSql'])) {
            $model->hasSql = $map['HasSql'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = $map['Lines'];
            }
        }

        return $model;
    }
}
