<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody;

use AlibabaCloud\Tea\Model;

class attackEvent extends Model
{
    /**
     * @description The points in time when the number of attacks is collected in the trend chart.
     *
     * @var string[]
     */
    public $dateArray;

    /**
     * @description The total number of attacks on the current day.
     *
     * @example 1096
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The numbers of attacks at all points in time.
     *
     * @var string[]
     */
    public $valueArray;
    protected $_name = [
        'dateArray'  => 'DateArray',
        'totalCount' => 'TotalCount',
        'valueArray' => 'ValueArray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateArray) {
            $res['DateArray'] = $this->dateArray;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->valueArray) {
            $res['ValueArray'] = $this->valueArray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = $map['DateArray'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ValueArray'])) {
            if (!empty($map['ValueArray'])) {
                $model->valueArray = $map['ValueArray'];
            }
        }

        return $model;
    }
}
