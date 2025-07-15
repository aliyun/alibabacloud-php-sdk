<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponseBody\snapshotDataInfos;

use AlibabaCloud\Tea\Model;

class snapshotDataInfo extends Model
{
    /**
     * @description The date.
     *
     * @example 20180209
     *
     * @var string
     */
    public $date;

    /**
     * @description The total number of snapshots that were captured on the day.
     *
     * @example 110
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'date' => 'Date',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
