<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class CreateExecutorsRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $workerType;

    /**
     * @var string
     */
    public $workers;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'workerType' => 'WorkerType',
        'workers' => 'Workers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->workerType) {
            $res['WorkerType'] = $this->workerType;
        }

        if (null !== $this->workers) {
            $res['Workers'] = $this->workers;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['WorkerType'])) {
            $model->workerType = $map['WorkerType'];
        }

        if (isset($map['Workers'])) {
            $model->workers = $map['Workers'];
        }

        return $model;
    }
}
