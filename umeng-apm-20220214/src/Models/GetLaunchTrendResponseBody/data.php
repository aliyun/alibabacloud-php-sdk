<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2495
     *
     * @var int
     */
    public $coldLaunchCount;

    /**
     * @example 3784.5
     *
     * @var float
     */
    public $coldLaunchDuration;

    /**
     * @example 2495
     *
     * @var int
     */
    public $firstLaunchCount;

    /**
     * @example 3740.5
     *
     * @var float
     */
    public $firstLaunchDuration;

    /**
     * @example 2495
     *
     * @var int
     */
    public $hotLaunchCount;

    /**
     * @example 1400.5
     *
     * @var float
     */
    public $hotLaunchDuration;

    /**
     * @example 2023-05-20
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'coldLaunchCount'     => 'coldLaunchCount',
        'coldLaunchDuration'  => 'coldLaunchDuration',
        'firstLaunchCount'    => 'firstLaunchCount',
        'firstLaunchDuration' => 'firstLaunchDuration',
        'hotLaunchCount'      => 'hotLaunchCount',
        'hotLaunchDuration'   => 'hotLaunchDuration',
        'timePoint'           => 'timePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldLaunchCount) {
            $res['coldLaunchCount'] = $this->coldLaunchCount;
        }
        if (null !== $this->coldLaunchDuration) {
            $res['coldLaunchDuration'] = $this->coldLaunchDuration;
        }
        if (null !== $this->firstLaunchCount) {
            $res['firstLaunchCount'] = $this->firstLaunchCount;
        }
        if (null !== $this->firstLaunchDuration) {
            $res['firstLaunchDuration'] = $this->firstLaunchDuration;
        }
        if (null !== $this->hotLaunchCount) {
            $res['hotLaunchCount'] = $this->hotLaunchCount;
        }
        if (null !== $this->hotLaunchDuration) {
            $res['hotLaunchDuration'] = $this->hotLaunchDuration;
        }
        if (null !== $this->timePoint) {
            $res['timePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['coldLaunchCount'])) {
            $model->coldLaunchCount = $map['coldLaunchCount'];
        }
        if (isset($map['coldLaunchDuration'])) {
            $model->coldLaunchDuration = $map['coldLaunchDuration'];
        }
        if (isset($map['firstLaunchCount'])) {
            $model->firstLaunchCount = $map['firstLaunchCount'];
        }
        if (isset($map['firstLaunchDuration'])) {
            $model->firstLaunchDuration = $map['firstLaunchDuration'];
        }
        if (isset($map['hotLaunchCount'])) {
            $model->hotLaunchCount = $map['hotLaunchCount'];
        }
        if (isset($map['hotLaunchDuration'])) {
            $model->hotLaunchDuration = $map['hotLaunchDuration'];
        }
        if (isset($map['timePoint'])) {
            $model->timePoint = $map['timePoint'];
        }

        return $model;
    }
}
