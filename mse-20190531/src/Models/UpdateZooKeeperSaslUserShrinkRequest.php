<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateZooKeeperSaslUserShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $reload;

    /**
     * @var string
     */
    public $saslUserShrink;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'instanceId' => 'InstanceId',
        'reload' => 'Reload',
        'saslUserShrink' => 'SaslUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->reload) {
            $res['Reload'] = $this->reload;
        }

        if (null !== $this->saslUserShrink) {
            $res['SaslUser'] = $this->saslUserShrink;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Reload'])) {
            $model->reload = $map['Reload'];
        }

        if (isset($map['SaslUser'])) {
            $model->saslUserShrink = $map['SaslUser'];
        }

        return $model;
    }
}
