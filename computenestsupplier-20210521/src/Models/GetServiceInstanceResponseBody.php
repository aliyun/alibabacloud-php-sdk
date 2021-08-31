<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\service;
use AlibabaCloud\Tea\Model;

class GetServiceInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var service
     */
    public $service;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $operationStartTime;

    /**
     * @var string
     */
    public $operationEndTime;

    /**
     * @var string
     */
    public $operatedServiceInstanceId;

    /**
     * @var bool
     */
    public $isOperated;

    /**
     * @var bool
     */
    public $enableInstanceOps;

    /**
     * @var string
     */
    public $resources;
    protected $_name = [
        'status'                    => 'Status',
        'templateName'              => 'TemplateName',
        'updateTime'                => 'UpdateTime',
        'requestId'                 => 'RequestId',
        'serviceInstanceId'         => 'ServiceInstanceId',
        'createTime'                => 'CreateTime',
        'userId'                    => 'UserId',
        'service'                   => 'Service',
        'parameters'                => 'Parameters',
        'progress'                  => 'Progress',
        'statusDetail'              => 'StatusDetail',
        'operationStartTime'        => 'OperationStartTime',
        'operationEndTime'          => 'OperationEndTime',
        'operatedServiceInstanceId' => 'OperatedServiceInstanceId',
        'isOperated'                => 'IsOperated',
        'enableInstanceOps'         => 'EnableInstanceOps',
        'resources'                 => 'Resources',
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->service) {
            $res['Service'] = null !== $this->service ? $this->service->toMap() : null;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->operationStartTime) {
            $res['OperationStartTime'] = $this->operationStartTime;
        }
        if (null !== $this->operationEndTime) {
            $res['OperationEndTime'] = $this->operationEndTime;
        }
        if (null !== $this->operatedServiceInstanceId) {
            $res['OperatedServiceInstanceId'] = $this->operatedServiceInstanceId;
        }
        if (null !== $this->isOperated) {
            $res['IsOperated'] = $this->isOperated;
        }
        if (null !== $this->enableInstanceOps) {
            $res['EnableInstanceOps'] = $this->enableInstanceOps;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Service'])) {
            $model->service = service::fromMap($map['Service']);
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['OperationStartTime'])) {
            $model->operationStartTime = $map['OperationStartTime'];
        }
        if (isset($map['OperationEndTime'])) {
            $model->operationEndTime = $map['OperationEndTime'];
        }
        if (isset($map['OperatedServiceInstanceId'])) {
            $model->operatedServiceInstanceId = $map['OperatedServiceInstanceId'];
        }
        if (isset($map['IsOperated'])) {
            $model->isOperated = $map['IsOperated'];
        }
        if (isset($map['EnableInstanceOps'])) {
            $model->enableInstanceOps = $map['EnableInstanceOps'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
