<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeploySDGResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class failedItems extends Model
{
    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'errMessage' => 'ErrMessage',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
