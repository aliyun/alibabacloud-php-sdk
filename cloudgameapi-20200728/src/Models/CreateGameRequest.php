<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CreateGameRequest extends Model
{
    /**
     * @description 幂等参数，1-64位建议使用uuid
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 游戏名称
     *
     * @var string
     */
    public $gameName;

    /**
     * @description 平台类型
     *
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
