<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddZooKeeperSaslUserRequest\saslUser;

class AddZooKeeperSaslUserRequest extends Model
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
     * @var saslUser[]
     */
    public $saslUser;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'instanceId' => 'InstanceId',
        'reload' => 'Reload',
        'saslUser' => 'SaslUser',
    ];

    public function validate()
    {
        if (\is_array($this->saslUser)) {
            Model::validateArray($this->saslUser);
        }
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

        if (null !== $this->saslUser) {
            if (\is_array($this->saslUser)) {
                $res['SaslUser'] = [];
                $n1 = 0;
                foreach ($this->saslUser as $item1) {
                    $res['SaslUser'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['SaslUser'])) {
                $model->saslUser = [];
                $n1 = 0;
                foreach ($map['SaslUser'] as $item1) {
                    $model->saslUser[$n1] = saslUser::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
