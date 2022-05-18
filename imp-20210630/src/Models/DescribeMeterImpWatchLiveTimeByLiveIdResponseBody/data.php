<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\DescribeMeterImpWatchLiveTimeByLiveIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $watchTimeInLatency;

    /**
     * @var int
     */
    public $watchTimeInLowLatency;
    protected $_name = [
        'watchTimeInLatency'    => 'WatchTimeInLatency',
        'watchTimeInLowLatency' => 'WatchTimeInLowLatency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->watchTimeInLatency) {
            $res['WatchTimeInLatency'] = $this->watchTimeInLatency;
        }
        if (null !== $this->watchTimeInLowLatency) {
            $res['WatchTimeInLowLatency'] = $this->watchTimeInLowLatency;
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
        if (isset($map['WatchTimeInLatency'])) {
            $model->watchTimeInLatency = $map['WatchTimeInLatency'];
        }
        if (isset($map['WatchTimeInLowLatency'])) {
            $model->watchTimeInLowLatency = $map['WatchTimeInLowLatency'];
        }

        return $model;
    }
}
