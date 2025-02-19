<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $coldLaunchCount;
    /**
     * @var float
     */
    public $coldLaunchDuration;
    /**
     * @var int
     */
    public $firstLaunchCount;
    /**
     * @var float
     */
    public $firstLaunchDuration;
    /**
     * @var int
     */
    public $hotLaunchCount;
    /**
     * @var float
     */
    public $hotLaunchDuration;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
