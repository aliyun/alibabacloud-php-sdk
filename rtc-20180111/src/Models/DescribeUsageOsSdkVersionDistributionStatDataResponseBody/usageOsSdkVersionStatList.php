<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageOsSdkVersionDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class usageOsSdkVersionStatList extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $audioCallDuration;

    /**
     * @example 0.0984
     *
     * @var string
     */
    public $callDurationRatio;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $name;

    /**
     * @example macOS
     *
     * @var string
     */
    public $os;

    /**
     * @example 476
     *
     * @var int
     */
    public $totalCallDuration;

    /**
     * @example 473
     *
     * @var int
     */
    public $videoCallDuration;
    protected $_name = [
        'audioCallDuration' => 'AudioCallDuration',
        'callDurationRatio' => 'CallDurationRatio',
        'name'              => 'Name',
        'os'                => 'Os',
        'totalCallDuration' => 'TotalCallDuration',
        'videoCallDuration' => 'VideoCallDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioCallDuration) {
            $res['AudioCallDuration'] = $this->audioCallDuration;
        }
        if (null !== $this->callDurationRatio) {
            $res['CallDurationRatio'] = $this->callDurationRatio;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->totalCallDuration) {
            $res['TotalCallDuration'] = $this->totalCallDuration;
        }
        if (null !== $this->videoCallDuration) {
            $res['VideoCallDuration'] = $this->videoCallDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageOsSdkVersionStatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioCallDuration'])) {
            $model->audioCallDuration = $map['AudioCallDuration'];
        }
        if (isset($map['CallDurationRatio'])) {
            $model->callDurationRatio = $map['CallDurationRatio'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['TotalCallDuration'])) {
            $model->totalCallDuration = $map['TotalCallDuration'];
        }
        if (isset($map['VideoCallDuration'])) {
            $model->videoCallDuration = $map['VideoCallDuration'];
        }

        return $model;
    }
}
