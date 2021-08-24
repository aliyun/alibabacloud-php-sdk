<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\service;
use AlibabaCloud\Tea\Model;

class GetServiceInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $status;

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
     * @var string
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var service
     */
    public $service;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'outputs'           => 'Outputs',
        'status'            => 'Status',
        'updateTime'        => 'UpdateTime',
        'parameters'        => 'Parameters',
        'requestId'         => 'RequestId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'createTime'        => 'CreateTime',
        'statusDetail'      => 'StatusDetail',
        'resources'         => 'Resources',
        'service'           => 'Service',
        'progress'          => 'Progress',
        'templateName'      => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->service) {
            $res['Service'] = null !== $this->service ? $this->service->toMap() : null;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['Service'])) {
            $model->service = service::fromMap($map['Service']);
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
