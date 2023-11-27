<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetRoomStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $onlineCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $PV;

    /**
     * @example 100
     *
     * @var int
     */
    public $UV;
    protected $_name = [
        'onlineCount' => 'OnlineCount',
        'PV'          => 'PV',
        'UV'          => 'UV',
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
        if (null !== $this->PV) {
            $res['PV'] = $this->PV;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
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
        if (isset($map['PV'])) {
            $model->PV = $map['PV'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }

        return $model;
    }
}
