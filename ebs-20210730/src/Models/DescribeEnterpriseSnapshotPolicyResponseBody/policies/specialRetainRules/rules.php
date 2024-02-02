<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\specialRetainRules;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The unit of the special retention period.
     *
     * @example WEEKS
     *
     * @var string
     */
    public $specialPeriodUnit;

    /**
     * @description The value of the retention period.
     *
     * @example 1
     *
     * @var int
     */
    public $timeInterval;

    /**
     * @description The unit of the retention period.
     *
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
