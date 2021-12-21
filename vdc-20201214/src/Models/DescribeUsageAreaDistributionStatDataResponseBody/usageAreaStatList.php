<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageAreaDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class usageAreaStatList extends Model
{
    /**
     * @description 音频通话时长，单位分钟
     *
     * @var int
     */
    public $audioCallDuration;

    /**
     * @description 地域名称，如中国
     *
     * @var string
     */
    public $name;

    /**
     * @description 总通话时长，单位分钟
     *
     * @var int
     */
    public $totalCallDuration;

    /**
     * @description 视频通话时长，单位分钟
     *
     * @var int
     */
    public $videoCallDuration;
    protected $_name = [
        'audioCallDuration' => 'AudioCallDuration',
        'name'              => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return usageAreaStatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioCallDuration'])) {
            $model->audioCallDuration = $map['AudioCallDuration'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
