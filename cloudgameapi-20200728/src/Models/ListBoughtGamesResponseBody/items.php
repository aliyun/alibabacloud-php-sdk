<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListBoughtGamesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $gameName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'gameId'    => 'GameId',
        'gameName'  => 'GameName',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->gameName) {
            $res['GameName'] = $this->gameName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameName'])) {
            $model->gameName = $map['GameName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
