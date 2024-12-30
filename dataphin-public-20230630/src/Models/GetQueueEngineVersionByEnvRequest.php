<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetQueueEngineVersionByEnvRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 61187014-a3ba-4cdd-8609-1f0aa3df4a3d
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example PROD
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 7081229106458752
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example default-queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description This parameter is required.
     *
     * @example BOTH
     *
     * @var string
     */
    public $streamBatchMode;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'env'             => 'Env',
        'opTenantId'      => 'OpTenantId',
        'projectId'       => 'ProjectId',
        'queueName'       => 'QueueName',
        'streamBatchMode' => 'StreamBatchMode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetQueueEngineVersionByEnvRequest
     */
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
