<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOsSdkVersionDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class usageOsSdkVersionStatList extends Model
{
    /**
     * @description SDK版本名称，1.0.0、1.1.1等
     *
     * @var string
     */
    public $name;

    /**
     * @description 操作系统，如iOS、android等
     *
     * @var string
     */
    public $os;

    /**
     * @description 音频通话时长，单位分钟
     *
     * @var int
     */
    public $audioCallDuration;

    /**
     * @description 视频通话时长，单位分钟
     *
     * @var int
     */
    public $videoCallDuration;

    /**
     * @description 总通话时长，单位分钟
     *
     * @var int
     */
    public $totalCallDuration;

    /**
     * @description 通话时长占比，四位小数表示，如1.0000
     *
     * @var string
     */
    public $callDurationRatio;
    protected $_name = [
        'name'              => 'Name',
        'os'                => 'Os',
        'audioCallDuration' => 'AudioCallDuration',
        'videoCallDuration' => 'VideoCallDuration',
        'totalCallDuration' => 'TotalCallDuration',
        'callDurationRatio' => 'CallDurationRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->audioCallDuration) {
            $res['AudioCallDuration'] = $this->audioCallDuration;
        }
        if (null !== $this->videoCallDuration) {
            $res['VideoCallDuration'] = $this->videoCallDuration;
        }
        if (null !== $this->totalCallDuration) {
            $res['TotalCallDuration'] = $this->totalCallDuration;
        }
        if (null !== $this->callDurationRatio) {
            $res['CallDurationRatio'] = $this->callDurationRatio;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['AudioCallDuration'])) {
            $model->audioCallDuration = $map['AudioCallDuration'];
        }
        if (isset($map['VideoCallDuration'])) {
            $model->videoCallDuration = $map['VideoCallDuration'];
        }
        if (isset($map['TotalCallDuration'])) {
            $model->totalCallDuration = $map['TotalCallDuration'];
        }
        if (isset($map['CallDurationRatio'])) {
            $model->callDurationRatio = $map['CallDurationRatio'];
        }

        return $model;
    }
}
