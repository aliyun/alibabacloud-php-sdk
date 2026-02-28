<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activeCount;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $onlineCount;
    protected $_name = [
        'activeCount' => 'activeCount',
        'deviceCount' => 'deviceCount',
        'onlineCount' => 'onlineCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['activeCount'] = $this->activeCount;
        }

        if (null !== $this->deviceCount) {
            $res['deviceCount'] = $this->deviceCount;
        }

        if (null !== $this->onlineCount) {
            $res['onlineCount'] = $this->onlineCount;
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
        if (isset($map['activeCount'])) {
            $model->activeCount = $map['activeCount'];
        }

        if (isset($map['deviceCount'])) {
            $model->deviceCount = $map['deviceCount'];
        }

        if (isset($map['onlineCount'])) {
            $model->onlineCount = $map['onlineCount'];
        }

        return $model;
    }
}
