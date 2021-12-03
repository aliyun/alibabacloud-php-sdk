<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListHistoryContainerStatusResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class playerDetailList extends Model
{
    /**
     * @description 账号ID
     *
     * @var string
     */
    public $accountId;

    /**
     * @description 是否主机
     *
     * @var bool
     */
    public $isInitiator;

    /**
     * @description 玩家进入游戏时间
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'accountId'   => 'AccountId',
        'isInitiator' => 'IsInitiator',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->isInitiator) {
            $res['IsInitiator'] = $this->isInitiator;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playerDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['IsInitiator'])) {
            $model->isInitiator = $map['IsInitiator'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
