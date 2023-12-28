<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest\specialRetainRules;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example WEEKS|MONTHS|YEARS
     *
     * @var string
     */
    public $specialPeriodUnit;

    /**
     * @example 30
     *
     * @var int
     */
    public $timeInterval;

    /**
     * @example WEEKS|MONTHS|YEARS
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
