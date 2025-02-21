<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest\specialRetainRules;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $specialPeriodUnit;
    /**
     * @var int
     */
    public $timeInterval;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
