<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ManageAICLoginRequest extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $keyGroup;

    /**
     * @var string
     */
    public $keyName;
    protected $_name = [
        'actionName' => 'ActionName',
        'instanceId' => 'InstanceId',
        'keyGroup' => 'KeyGroup',
        'keyName' => 'KeyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyGroup) {
            $res['KeyGroup'] = $this->keyGroup;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
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
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyGroup'])) {
            $model->keyGroup = $map['KeyGroup'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        return $model;
    }
}
