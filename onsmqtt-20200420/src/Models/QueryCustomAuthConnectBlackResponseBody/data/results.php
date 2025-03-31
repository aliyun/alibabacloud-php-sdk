<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthConnectBlackResponseBody\data;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $permitAction;
    protected $_name = [
        'clientId' => 'ClientId',
        'effect' => 'Effect',
        'permitAction' => 'PermitAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
