<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserSecDropRequest extends Model
{
    /**
     * @description The date or month that you want to query.
     *
     *   If data is collected every day, set the date in the format of yyyymmdd, such as 20201203.
     *   If data is collected every month, set the month in the format of yyyymm, such as 202012.
     *
     * @example 20201203
     *
     * @var string
     */
    public $data;

    /**
     * @description The time interval at which data is collected.
     *
     *   If data is collected every day, the number of blocked packets on the specified day is calculated.
     *   If data is collected every month, the number of blocked packets in the specified month is calculated.
     *
     * @example 1day
     *
     * @var string
     */
    public $metric;

    /**
     * @description The security feature. Valid values:
     *
     *   waf: WAF
     *   tmd: rate limiting
     *   robot: bot traffic recognition
     *   l4\_dm_drop: domain name blocking on Layer 4
     *
     * @example waf
     *
     * @var string
     */
    public $secFunc;
    protected $_name = [
        'data'    => 'Data',
        'metric'  => 'Metric',
        'secFunc' => 'SecFunc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->secFunc) {
            $res['SecFunc'] = $this->secFunc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserSecDropRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['SecFunc'])) {
            $model->secFunc = $map['SecFunc'];
        }

        return $model;
    }
}
