<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody\data;

use AlibabaCloud\Tea\Model;

class sourceStats extends Model
{
    /**
     * @description The total number of sessions from the access source.
     *
     * @example 1
     *
     * @var string
     */
    public $count;

    /**
     * @description The client IDs.
     *
     * @var int[]
     */
    public $ids;

    /**
     * @description The access source.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'count' => 'Count',
        'ids'   => 'Ids',
        'key'   => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
