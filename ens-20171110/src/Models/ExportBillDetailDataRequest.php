<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportBillDetailDataRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2020-08-30T00:00:00Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2020-06-01T00:00:00Z
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'   => 'EndDate',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportBillDetailDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
