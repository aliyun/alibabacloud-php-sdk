<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpServiceDeployment extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $context;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $deploymentType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edasId;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $isServiceGroupEnable;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $orgType;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $pbcName;

    /**
     * @var int
     */
    public $pipelineTimes;

    /**
     * @var string
     */
    public $repositoryId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rollbackStatus;

    /**
     * @var int
     */
    public $serviceGroupId;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $times;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId' => 'accountId',
        'applicationType' => 'applicationType',
        'changeOrderId' => 'changeOrderId',
        'context' => 'context',
        'cpu' => 'cpu',
        'deploymentType' => 'deploymentType',
        'description' => 'description',
        'edasId' => 'edasId',
        'enterpriseId' => 'enterpriseId',
        'env' => 'env',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'imageId' => 'imageId',
        'imageTag' => 'imageTag',
        'instanceCount' => 'instanceCount',
        'isServiceGroupEnable' => 'isServiceGroupEnable',
        'memory' => 'memory',
        'message' => 'message',
        'orgType' => 'orgType',
        'pbcId' => 'pbcId',
        'pbcName' => 'pbcName',
        'pipelineTimes' => 'pipelineTimes',
        'repositoryId' => 'repositoryId',
        'requestId' => 'requestId',
        'rollbackStatus' => 'rollbackStatus',
        'serviceGroupId' => 'serviceGroupId',
        'serviceId' => 'serviceId',
        'serviceName' => 'serviceName',
        'status' => 'status',
        'timeout' => 'timeout',
        'times' => 'times',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->applicationType) {
            $res['applicationType'] = $this->applicationType;
        }

        if (null !== $this->changeOrderId) {
            $res['changeOrderId'] = $this->changeOrderId;
        }

        if (null !== $this->context) {
            $res['context'] = $this->context;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->deploymentType) {
            $res['deploymentType'] = $this->deploymentType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->edasId) {
            $res['edasId'] = $this->edasId;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }

        if (null !== $this->imageTag) {
            $res['imageTag'] = $this->imageTag;
        }

        if (null !== $this->instanceCount) {
            $res['instanceCount'] = $this->instanceCount;
        }

        if (null !== $this->isServiceGroupEnable) {
            $res['isServiceGroupEnable'] = $this->isServiceGroupEnable;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->orgType) {
            $res['orgType'] = $this->orgType;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->pbcName) {
            $res['pbcName'] = $this->pbcName;
        }

        if (null !== $this->pipelineTimes) {
            $res['pipelineTimes'] = $this->pipelineTimes;
        }

        if (null !== $this->repositoryId) {
            $res['repositoryId'] = $this->repositoryId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->rollbackStatus) {
            $res['rollbackStatus'] = $this->rollbackStatus;
        }

        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['applicationType'])) {
            $model->applicationType = $map['applicationType'];
        }

        if (isset($map['changeOrderId'])) {
            $model->changeOrderId = $map['changeOrderId'];
        }

        if (isset($map['context'])) {
            $model->context = $map['context'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['deploymentType'])) {
            $model->deploymentType = $map['deploymentType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['edasId'])) {
            $model->edasId = $map['edasId'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        if (isset($map['imageTag'])) {
            $model->imageTag = $map['imageTag'];
        }

        if (isset($map['instanceCount'])) {
            $model->instanceCount = $map['instanceCount'];
        }

        if (isset($map['isServiceGroupEnable'])) {
            $model->isServiceGroupEnable = $map['isServiceGroupEnable'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['orgType'])) {
            $model->orgType = $map['orgType'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['pbcName'])) {
            $model->pbcName = $map['pbcName'];
        }

        if (isset($map['pipelineTimes'])) {
            $model->pipelineTimes = $map['pipelineTimes'];
        }

        if (isset($map['repositoryId'])) {
            $model->repositoryId = $map['repositoryId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['rollbackStatus'])) {
            $model->rollbackStatus = $map['rollbackStatus'];
        }

        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
