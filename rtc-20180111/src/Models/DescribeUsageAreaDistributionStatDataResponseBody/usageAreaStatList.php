<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageAreaDistributionStatDataResponseBody;

use AlibabaCloud\Dara\Model;

class usageAreaStatList extends Model
{
    /**
     * @var int
     */
    public $audioCallDuration;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $totalCallDuration;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
