<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthConnectBlackResponseBody\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example GID_TEST@@@test
     *
     * @var string
     */
    public $clientId;

    /**
     * @example ALLOW
     *
     * @var string
     */
    public $effect;

    /**
     * @example CONNECT
     *
     * @var string
     */
    public $permitAction;
    protected $_name = [
        'clientId'     => 'ClientId',
        'effect'       => 'Effect',
        'permitAction' => 'PermitAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->permitAction) {
            $res['PermitAction'] = $this->permitAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['PermitAction'])) {
            $model->permitAction = $map['PermitAction'];
        }

        return $model;
    }
}
