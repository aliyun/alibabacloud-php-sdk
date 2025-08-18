<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetQueueEngineVersionByEnvRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $streamBatchMode;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'queueName' => 'QueueName',
        'streamBatchMode' => 'StreamBatchMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->streamBatchMode) {
            $res['StreamBatchMode'] = $this->streamBatchMode;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['StreamBatchMode'])) {
            $model->streamBatchMode = $map['StreamBatchMode'];
        }

        return $model;
    }
}
