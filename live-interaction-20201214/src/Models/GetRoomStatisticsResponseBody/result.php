<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetRoomStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 当前房间的在线观众数。
     *
     * @var int
     */
    public $onlineCount;

    /**
     * @description 当前房间的历史用户访问数目（UV）。
     *
     * @var int
     */
    public $UV;

    /**
     * @description 当前房间的历史访问数目（PV）。
     *
     * @var int
     */
    public $PV;
    protected $_name = [
        'onlineCount' => 'OnlineCount',
        'UV'          => 'UV',
        'PV'          => 'PV',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }
        if (null !== $this->PV) {
            $res['PV'] = $this->PV;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }
        if (isset($map['PV'])) {
            $model->PV = $map['PV'];
        }

        return $model;
    }
}
