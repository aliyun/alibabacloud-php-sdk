<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CreateGameRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $gameName;

    /**
     * @var int
     */
    public $platformType;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'gameName'     => 'GameName',
        'platformType' => 'PlatformType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
     * @return CreateGameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
