<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsResponseBody;

use AlibabaCloud\Tea\Model;

class domainAttackEvents extends Model
{
    /**
     * @description The attacked domain name.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The time when the DDoS attack stopped. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1560320160
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The peak attack QPS.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxQps;

    /**
     * @description The time when the DDoS attack started. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1560312900
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'domain'    => 'Domain',
        'endTime'   => 'EndTime',
        'maxQps'    => 'MaxQps',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainAttackEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
