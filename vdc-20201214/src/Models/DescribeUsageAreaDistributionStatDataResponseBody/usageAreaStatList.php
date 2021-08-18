<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageAreaDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class usageAreaStatList extends Model
{
    /**
     * @description 地域名称，如中国
     *
     * @var string
     */
    public $name;

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
    protected $_name = [
        'name'              => 'Name',
        'audioCallDuration' => 'AudioCallDuration',
        'videoCallDuration' => 'VideoCallDuration',
        'totalCallDuration' => 'TotalCallDuration',
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
        if (null !== $this->audioCallDuration) {
            $res['AudioCallDuration'] = $this->audioCallDuration;
        }
        if (null !== $this->videoCallDuration) {
            $res['VideoCallDuration'] = $this->videoCallDuration;
        }
        if (null !== $this->totalCallDuration) {
            $res['TotalCallDuration'] = $this->totalCallDuration;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}
