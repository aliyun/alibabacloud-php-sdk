<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateExecutorGroupResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $failedService;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $workerId;

    /**
     * @var string
     */
    public $workerType;

    /**
     * @var string
     */
    public $workers;
    protected $_name = [
        'authType' => 'AuthType',
        'description' => 'Description',
        'failedService' => 'FailedService',
        'name' => 'Name',
        'network' => 'Network',
        'protocol' => 'Protocol',
        'workerId' => 'WorkerId',
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
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->failedService) {
            $res['FailedService'] = $this->failedService;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->workerId) {
            $res['WorkerId'] = $this->workerId;
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FailedService'])) {
            $model->failedService = $map['FailedService'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['WorkerId'])) {
            $model->workerId = $map['WorkerId'];
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
