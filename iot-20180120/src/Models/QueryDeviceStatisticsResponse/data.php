<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $onlineCount;

    /**
     * @var int
     */
    public $activeCount;
    protected $_name = [
        'deviceCount' => 'deviceCount',
        'onlineCount' => 'onlineCount',
        'activeCount' => 'activeCount',
    ];

    public function validate()
    {
        Model::validateRequired('deviceCount', $this->deviceCount, true);
        Model::validateRequired('onlineCount', $this->onlineCount, true);
        Model::validateRequired('activeCount', $this->activeCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCount) {
            $res['deviceCount'] = $this->deviceCount;
        }
        if (null !== $this->onlineCount) {
            $res['onlineCount'] = $this->onlineCount;
        }
        if (null !== $this->activeCount) {
            $res['activeCount'] = $this->activeCount;
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
        if (isset($map['deviceCount'])) {
            $model->deviceCount = $map['deviceCount'];
        }
        if (isset($map['onlineCount'])) {
            $model->onlineCount = $map['onlineCount'];
        }
        if (isset($map['activeCount'])) {
            $model->activeCount = $map['activeCount'];
        }

        return $model;
    }
}
