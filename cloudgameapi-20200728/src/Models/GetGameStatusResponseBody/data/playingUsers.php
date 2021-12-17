<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class playingUsers extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $startPlayTime;
    protected $_name = [
        'accountId'     => 'AccountId',
        'startPlayTime' => 'StartPlayTime',
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
        if (null !== $this->startPlayTime) {
            $res['StartPlayTime'] = $this->startPlayTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playingUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['StartPlayTime'])) {
            $model->startPlayTime = $map['StartPlayTime'];
        }

        return $model;
    }
}
