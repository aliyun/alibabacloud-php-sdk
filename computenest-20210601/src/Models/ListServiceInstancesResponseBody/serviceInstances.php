<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances\service;
use AlibabaCloud\Tea\Model;

class serviceInstances extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $statusDetail;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $operatedServiceInstanceId;

    /**
     * @var service
     */
    public $service;

    /**
     * @var string
     */
    public $operationStartTime;

    /**
     * @var string
     */
    public $operationEndTime;

    /**
     * @var bool
     */
    public $enableInstanceOps;
    protected $_name = [
        'status'                    => 'Status',
        'outputs'                   => 'Outputs',
        'updateTime'                => 'UpdateTime',
        'parameters'                => 'Parameters',
        'serviceInstanceId'         => 'ServiceInstanceId',
        'createTime'                => 'CreateTime',
        'statusDetail'              => 'StatusDetail',
        'progress'                  => 'Progress',
        'resources'                 => 'Resources',
        'templateName'              => 'TemplateName',
        'operatedServiceInstanceId' => 'OperatedServiceInstanceId',
        'service'                   => 'Service',
        'operationStartTime'        => 'OperationStartTime',
        'operationEndTime'          => 'OperationEndTime',
        'enableInstanceOps'         => 'EnableInstanceOps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->operatedServiceInstanceId) {
            $res['OperatedServiceInstanceId'] = $this->operatedServiceInstanceId;
        }
        if (null !== $this->service) {
            $res['Service'] = null !== $this->service ? $this->service->toMap() : null;
        }
        if (null !== $this->operationStartTime) {
            $res['OperationStartTime'] = $this->operationStartTime;
        }
        if (null !== $this->operationEndTime) {
            $res['OperationEndTime'] = $this->operationEndTime;
        }
        if (null !== $this->enableInstanceOps) {
            $res['EnableInstanceOps'] = $this->enableInstanceOps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['OperatedServiceInstanceId'])) {
            $model->operatedServiceInstanceId = $map['OperatedServiceInstanceId'];
        }
        if (isset($map['Service'])) {
            $model->service = service::fromMap($map['Service']);
        }
        if (isset($map['OperationStartTime'])) {
            $model->operationStartTime = $map['OperationStartTime'];
        }
        if (isset($map['OperationEndTime'])) {
            $model->operationEndTime = $map['OperationEndTime'];
        }
        if (isset($map['EnableInstanceOps'])) {
            $model->enableInstanceOps = $map['EnableInstanceOps'];
        }

        return $model;
    }
}
