<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetGameCcuRequest extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $accessKey;
    protected $_name = [
        'gameId'     => 'GameId',
        'regionName' => 'RegionName',
        'accessKey'  => 'AccessKey',
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGameCcuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        return $model;
    }
}
