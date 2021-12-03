<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListContainerStatusResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class playerDetailList extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var bool
     */
    public $isInitiator;

    /**
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
