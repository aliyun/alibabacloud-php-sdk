<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListContainerStatusRequest;

use AlibabaCloud\Tea\Model;

class gameSessionIdList extends Model
{
    /**
     * @var string
     */
    public $gameSessionId;
    protected $_name = [
        'gameSessionId' => 'GameSessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameSessionId) {
            $res['GameSessionId'] = $this->gameSessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gameSessionIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameSessionId'])) {
            $model->gameSessionId = $map['GameSessionId'];
        }

        return $model;
    }
}
