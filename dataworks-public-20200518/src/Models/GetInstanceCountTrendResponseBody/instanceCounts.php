<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceCountTrendResponseBody;

use AlibabaCloud\Tea\Model;

class instanceCounts extends Model
{
    /**
     * @example 9527
     *
     * @var int
     */
    public $count;

    /**
     * @example 1600963200000
     *
     * @var int
     */
    public $date;
    protected $_name = [
        'count' => 'Count',
        'date'  => 'Date',
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
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
