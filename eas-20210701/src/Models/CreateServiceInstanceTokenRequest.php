<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceInstanceTokenRequest extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $workerName;
    protected $_name = [
        'actionType' => 'ActionType',
        'workerName' => 'WorkerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->workerName) {
            $res['WorkerName'] = $this->workerName;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['WorkerName'])) {
            $model->workerName = $map['WorkerName'];
        }

        return $model;
    }
}
