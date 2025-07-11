<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class scaleTimerInfos extends Model
{
    /**
     * @description The number of cloud computers that you purchase in the cloud computer pool. This parameter is one of the auto scaling parameters. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $buyResAmount;

    /**
     * @description The cron expression for the scheduled task.
     *
     * @example 0 0 0 * * ?
     *
     * @var string
     */
    public $cron;

    /**
     * @description The duration that is retained after the session is disconnected. Unit: milliseconds. Valid values: 180000 to 345600000. That is, the session can be retained for 3 to 5760 minutes (4 days). If you specify the value to 0, the session is permanently retained.
     *
     * When a session is disconnected, take note of the following situations: If an end user does not resume the session within the specified duration, the session is closed and all unsaved data is cleared. If the end user resumes the session within the specified duration, the end user can still access data of the session.
     *
     * @example 600000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy for the multi-session many-to-many share.
     *
     * Valid values:
     *
     *   0: depth-first.
     *   1: breadth-first.
     *
     * @example 1
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of cloud computers in the cloud computer pool. This parameter is one of the auto scaling parameters. Valid values: 0 to 200.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResAmount;

    /**
     * @description The minimum number of cloud computers in the cloud computer pool. This parameter is one of the auto scaling parameters. Valid values: 0 to 200.
     *
     * @example 1
     *
     * @var int
     */
    public $minResAmount;

    /**
     * @description The threshold for the ratio of connected sessions, which triggers automatic scaling of cloud computers within the multi-session many-to-many share. To calculate the ratio of connected sessions, use the following formula:
     *
     * `Ratio of connected sessions = Number of connected sessions/(Total number of cloud computers × Maximum number of sessions allowed for each cloud computer) × 100%`.
     *
     * If the session ratio exceeds the threshold, new cloud computers are provisioned. If it falls below the threshold, additional cloud computers are removed.
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The type of the scheduled task.
     *
     * Valid values:
     *
     *   drop: decline policy
     *   normal: normal policy
     *   peak: peak hour policy
     *   rise: rise policy
     *
     * @example rise
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'buyResAmount' => 'BuyResAmount',
        'cron' => 'Cron',
        'keepDuration' => 'KeepDuration',
        'loadPolicy' => 'LoadPolicy',
        'maxResAmount' => 'MaxResAmount',
        'minResAmount' => 'MinResAmount',
        'ratioThreshold' => 'RatioThreshold',
        'type' => 'Type',
    ];

    public function validate() {}

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
