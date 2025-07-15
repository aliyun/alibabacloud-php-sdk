<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsTotalCountResponseBody\streamCountList;

use AlibabaCloud\Tea\Model;

class streamCountInfos extends Model
{
    /**
     * @description The total number of live streams.
     *
     * @example 934
     *
     * @var int
     */
    public $count;

    /**
     * @description The timestamp.
     *
     * @example 2023-07-24T16:00:00Z
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'count' => 'Count',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCountInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
