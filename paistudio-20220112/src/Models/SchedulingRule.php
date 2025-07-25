<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class SchedulingRule extends Model
{
    /**
     * @var string
     */
    public $cronTab;

    /**
     * @var string
     */
    public $endAt;

    /**
     * @var bool
     */
    public $executeOnce;

    /**
     * @var string
     */
    public $startAt;
    protected $_name = [
        'cronTab' => 'CronTab',
        'endAt' => 'EndAt',
        'executeOnce' => 'ExecuteOnce',
        'startAt' => 'StartAt',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronTab) {
            $res['CronTab'] = $this->cronTab;
        }
        if (null !== $this->endAt) {
            $res['EndAt'] = $this->endAt;
        }
        if (null !== $this->executeOnce) {
            $res['ExecuteOnce'] = $this->executeOnce;
        }
        if (null !== $this->startAt) {
            $res['StartAt'] = $this->startAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchedulingRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronTab'])) {
            $model->cronTab = $map['CronTab'];
        }
        if (isset($map['EndAt'])) {
            $model->endAt = $map['EndAt'];
        }
        if (isset($map['ExecuteOnce'])) {
            $model->executeOnce = $map['ExecuteOnce'];
        }
        if (isset($map['StartAt'])) {
            $model->startAt = $map['StartAt'];
        }

        return $model;
    }
}
