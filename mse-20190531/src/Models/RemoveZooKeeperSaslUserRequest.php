<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class RemoveZooKeeperSaslUserRequest extends Model
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
     * @var string[]
     */
    public $userNames;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'instanceId' => 'InstanceId',
        'reload' => 'Reload',
        'userNames' => 'UserNames',
    ];

    public function validate()
    {
        if (\is_array($this->userNames)) {
            Model::validateArray($this->userNames);
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

        if (null !== $this->userNames) {
            if (\is_array($this->userNames)) {
                $res['UserNames'] = [];
                $n1 = 0;
                foreach ($this->userNames as $item1) {
                    $res['UserNames'][$n1] = $item1;
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

        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = [];
                $n1 = 0;
                foreach ($map['UserNames'] as $item1) {
                    $model->userNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
