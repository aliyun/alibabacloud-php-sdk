<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList;

use AlibabaCloud\Tea\Model;

class playConfig extends Model
{
    /**
     * @var float
     */
    public $volumeRate;
    protected $_name = [
        'volumeRate' => 'VolumeRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volumeRate) {
            $res['VolumeRate'] = $this->volumeRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VolumeRate'])) {
            $model->volumeRate = $map['VolumeRate'];
        }

        return $model;
    }
}
