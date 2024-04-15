<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupScaleTimerRequest;

use AlibabaCloud\Tea\Model;

class scaleTimerInfos extends Model
{
    /**
     * @description One option for the auto scaling policy. This option specifies the number of cloud computers that you want to create in the cloud computer pool. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $buyResAmount;

    /**
     * @description The cron expression of the trigger time.
     *
     * @example 0 0 12 ? * 1
     *
     * @var string
     */
    public $cron;

    /**
     * @description The keep-alive duration of a session after the session is disconnected. Unit: milliseconds. Valid values: 180000 (3 minutes) to 345600000 (4 days). A value of 0 indicates that the session always keeps alive.
     *
     * If a session is disconnected by the end user or accidentally due to a factor and the end user does not re-establish a connection with the session within the keep-alive duration, the session expires and unsaved data is deleted. If the end user successfully re-establishes a connection with the session within the keep-alive duration, the end user returns to the session and can still access the original data.
     * @example 1000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy for the multi-session cloud computer pool.
     *
     * Valid values:
     *
     *   0: depth-first
     *   1: breadth first.
     *
     * @example 0
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description One option for the auto scaling policy. This option specifies the maximum number of cloud computers that you can create in the cloud computer pool. Valid values: 0 to 200.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResAmount;

    /**
     * @description One option for the auto scaling policy. This option specifies the minimum number of cloud computers that you must create in the cloud computer pool. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $minResAmount;

    /**
     * @description The threshold for the ratio of connected sessions. This parameter is the condition that triggers auto scaling in a multi-session cloud computer pool. Formula:
     *
     * When the specified threshold is reached, new cloud computers are automatically created. When the specified threshold is not reached, idle cloud computers are released.
     * @example 0.9
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The type of the auto scaling policy.
     *
     * Valid values:
     *
     *   drop
     *
     * <!-- -->
     *
     *   normal
     *
     * <!-- -->
     *
     *   peak
     *
     * <!-- -->
     *
     *   rise
     *
     * <!-- -->
     * @example rise
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'buyResAmount'   => 'BuyResAmount',
        'cron'           => 'Cron',
        'keepDuration'   => 'KeepDuration',
        'loadPolicy'     => 'LoadPolicy',
        'maxResAmount'   => 'MaxResAmount',
        'minResAmount'   => 'MinResAmount',
        'ratioThreshold' => 'RatioThreshold',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyResAmount) {
            $res['BuyResAmount'] = $this->buyResAmount;
        }
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }
        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }
        if (null !== $this->maxResAmount) {
            $res['MaxResAmount'] = $this->maxResAmount;
        }
        if (null !== $this->minResAmount) {
            $res['MinResAmount'] = $this->minResAmount;
        }
        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleTimerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyResAmount'])) {
            $model->buyResAmount = $map['BuyResAmount'];
        }
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }
        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }
        if (isset($map['MaxResAmount'])) {
            $model->maxResAmount = $map['MaxResAmount'];
        }
        if (isset($map['MinResAmount'])) {
            $model->minResAmount = $map['MinResAmount'];
        }
        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
