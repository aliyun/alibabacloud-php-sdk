<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGamesResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
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
    public $platformType;
    protected $_name = [
        'gameId'       => 'GameId',
        'gameName'     => 'GameName',
        'platformType' => 'PlatformType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->gameName) {
            $res['GameName'] = $this->gameName;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameName'])) {
            $model->gameName = $map['GameName'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }

        return $model;
    }
}
