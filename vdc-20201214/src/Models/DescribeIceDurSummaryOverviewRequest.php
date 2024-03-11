<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeIceDurSummaryOverviewRequest extends Model
{
    /**
     * @example 12312312313
     *
     * @var int
     */
    public $curTs;

    /**
     * @example GMT+08:00
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'curTs'    => 'CurTs',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curTs) {
            $res['CurTs'] = $this->curTs;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIceDurSummaryOverviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurTs'])) {
            $model->curTs = $map['CurTs'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
