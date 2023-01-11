<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\operationInfo;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetStackResponseBody extends Model
{
    /**
     * @example 2020-09-16T08:21:40
     *
     * @var string
     */
    public $createTime;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @example Create a VPC.
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @example 2020-09-16T09:21:40
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @example {}
     *
     * @var string
     */
    public $interface;

    /**
     * @var log
     */
    public $log;

    /**
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @var operationInfo
     */
    public $operationInfo;

    /**
     * @var mixed[][]
     */
    public $outputs;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf692****
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceProgress
     */
    public $resourceProgress;

    /**
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf692****
     *
     * @var string
     */
    public $rootStackId;

    /**
     * @example false
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @example ACVS
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @example c754d2a4-28f1-46df-b557-9586173a****
     *
     * @var string
     */
    public $stackId;

    /**
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @example ROS
     *
     * @var string
     */
    public $stackType;

    /**
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @example Stack CREATE completed successfully
     *
     * @var string
     */
    public $statusReason;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example Create a VPC.
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @example a52f81be-496f-4e1c-a286-8852ab54****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example 10
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @example 2020-09-17T08:21:40
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'deletionProtection'  => 'DeletionProtection',
        'description'         => 'Description',
        'disableRollback'     => 'DisableRollback',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'interface'           => 'Interface',
        'log'                 => 'Log',
        'notificationURLs'    => 'NotificationURLs',
        'operationInfo'       => 'OperationInfo',
        'outputs'             => 'Outputs',
        'parameters'          => 'Parameters',
        'parentStackId'       => 'ParentStackId',
        'ramRoleName'         => 'RamRoleName',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceProgress'    => 'ResourceProgress',
        'rootStackId'         => 'RootStackId',
        'serviceManaged'      => 'ServiceManaged',
        'serviceName'         => 'ServiceName',
        'stackDriftStatus'    => 'StackDriftStatus',
        'stackId'             => 'StackId',
        'stackName'           => 'StackName',
        'stackType'           => 'StackType',
        'status'              => 'Status',
        'statusReason'        => 'StatusReason',
        'tags'                => 'Tags',
        'templateDescription' => 'TemplateDescription',
        'templateId'          => 'TemplateId',
        'templateScratchId'   => 'TemplateScratchId',
        'templateURL'         => 'TemplateURL',
        'templateVersion'     => 'TemplateVersion',
        'timeoutInMinutes'    => 'TimeoutInMinutes',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->interface) {
            $res['Interface'] = $this->interface;
        }
        if (null !== $this->log) {
            $res['Log'] = null !== $this->log ? $this->log->toMap() : null;
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
        }
        if (null !== $this->operationInfo) {
            $res['OperationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toMap() : null;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parentStackId) {
            $res['ParentStackId'] = $this->parentStackId;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceProgress) {
            $res['ResourceProgress'] = null !== $this->resourceProgress ? $this->resourceProgress->toMap() : null;
        }
        if (null !== $this->rootStackId) {
            $res['RootStackId'] = $this->rootStackId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackType) {
            $res['StackType'] = $this->stackType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['Interface'])) {
            $model->interface = $map['Interface'];
        }
        if (isset($map['Log'])) {
            $model->log = log::fromMap($map['Log']);
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }
        if (isset($map['OperationInfo'])) {
            $model->operationInfo = operationInfo::fromMap($map['OperationInfo']);
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = $map['Outputs'];
            }
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ParentStackId'])) {
            $model->parentStackId = $map['ParentStackId'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceProgress'])) {
            $model->resourceProgress = resourceProgress::fromMap($map['ResourceProgress']);
        }
        if (isset($map['RootStackId'])) {
            $model->rootStackId = $map['RootStackId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackType'])) {
            $model->stackType = $map['StackType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
