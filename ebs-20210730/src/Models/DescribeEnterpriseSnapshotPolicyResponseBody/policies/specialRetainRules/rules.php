<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\specialRetainRules;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The periodic unit for specially retained snapshots. If configured to WEEKS, it provides special retention for the first snapshot of each week. The retention period is determined by TimeUnit and TimeInterval. The range of values are:
     * - YEARS
     * @example WEEKS
     *
     * @var string
     */
    public $specialPeriodUnit;

    /**
     * @description Retention Time Value. The range of values is greater than 1.
     *
     * @example 1
     *
     * @var int
     */
    public $timeInterval;

    /**
     * @description Retention time unit for special snapshots. The range of values:
     *
     * - WEEKS
     * @example WEEKS
     *
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'specialPeriodUnit' => 'SpecialPeriodUnit',
        'timeInterval'      => 'TimeInterval',
        'timeUnit'          => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specialPeriodUnit) {
            $res['SpecialPeriodUnit'] = $this->specialPeriodUnit;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecialPeriodUnit'])) {
            $model->specialPeriodUnit = $map['SpecialPeriodUnit'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
