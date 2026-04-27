<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class CreateExecutorGroupRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $description;

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
     * @var string
     */
    public $workerType;

    /**
     * @var string
     */
    public $workers;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'authType' => 'AuthType',
        'clusterId' => 'ClusterId',
        'description' => 'Description',
        'name' => 'Name',
        'network' => 'Network',
        'protocol' => 'Protocol',
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
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['WorkerType'])) {
            $model->workerType = $map['WorkerType'];
        }

        if (isset($map['Workers'])) {
            $model->workers = $map['Workers'];
        }

        return $model;
    }
}
