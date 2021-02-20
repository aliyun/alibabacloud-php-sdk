<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsResponseBody;

use AlibabaCloud\Tea\Model;

class domainAttackEvents extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $maxQps;
    protected $_name = [
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'domain'    => 'Domain',
        'maxQps'    => 'MaxQps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }

        return $model;
    }
}
