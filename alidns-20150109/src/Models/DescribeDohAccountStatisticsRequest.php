<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDohAccountStatisticsRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the YYYY-MM-DD format.
     *
     * The default value is the day when you perform the operation.
     *
     * @example 2019-07-04
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The beginning of the time range to query. Specify the time in the YYYY-MM-DD format.
     *
     * You can query only the DNS records of the latest 90 days.`The value of StartDate must be greater than or equal to the difference between the current date and 90`.
     *
     * @example 2019-07-04
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate' => 'EndDate',
        'lang' => 'Lang',
        'startDate' => 'StartDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDohAccountStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
