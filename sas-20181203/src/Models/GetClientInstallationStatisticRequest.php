<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetClientInstallationStatisticRequest extends Model
{
    /**
     * @description The timestamp that specifies the end of the time range to collect statistics. Unit: millisecond.
     *
     * @example 1687708800000
     *
     * @var int
     */
    public $timeEnd;

    /**
     * @description The timestamp that specifies the beginning of the time range to collect statistics. Unit: millisecond.
     *
     * @example 1687104000000
     *
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'timeEnd'   => 'TimeEnd',
        'timeStart' => 'TimeStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientInstallationStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        return $model;
    }
}
