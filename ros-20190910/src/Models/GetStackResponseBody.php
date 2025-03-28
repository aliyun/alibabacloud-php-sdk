<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\operationInfo;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\tags;

class GetStackResponseBody extends Model
{
    /**
     * @var int
     */
    public $checkedStackResourceCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $interface;

    /**
     * @var log
     */
    public $log;

    /**
     * @var int
     */
    public $notCheckedStackResourceCount;

    /**
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @var operationInfo
     */
    public $operationInfo;

    /**
     * @var string[]
     */
    public $orderIds;

    /**
     * @var mixed[][]
     */
    public $outputs;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $parentStackId;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceProgress
     */
    public $resourceProgress;

    /**
     * @var string
     */
    public $rollbackFailedRootReason;

    /**
     * @var string
     */
    public $rootStackId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $stackType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateScratchId;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'checkedStackResourceCount' => 'CheckedStackResourceCount',
        'createTime' => 'CreateTime',
        'deletionProtection' => 'DeletionProtection',
        'description' => 'Description',
        'disableRollback' => 'DisableRollback',
        'driftDetectionTime' => 'DriftDetectionTime',
        'interface' => 'Interface',
        'log' => 'Log',
        'notCheckedStackResourceCount' => 'NotCheckedStackResourceCount',
        'notificationURLs' => 'NotificationURLs',
        'operationInfo' => 'OperationInfo',
        'orderIds' => 'OrderIds',
        'outputs' => 'Outputs',
        'parameters' => 'Parameters',
        'parentStackId' => 'ParentStackId',
        'ramRoleName' => 'RamRoleName',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceProgress' => 'ResourceProgress',
        'rollbackFailedRootReason' => 'RollbackFailedRootReason',
        'rootStackId' => 'RootStackId',
        'serviceManaged' => 'ServiceManaged',
        'serviceName' => 'ServiceName',
        'stackDriftStatus' => 'StackDriftStatus',
        'stackId' => 'StackId',
        'stackName' => 'StackName',
        'stackType' => 'StackType',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
        'tags' => 'Tags',
        'templateDescription' => 'TemplateDescription',
        'templateId' => 'TemplateId',
        'templateScratchId' => 'TemplateScratchId',
        'templateURL' => 'TemplateURL',
        'templateVersion' => 'TemplateVersion',
        'timeoutInMinutes' => 'TimeoutInMinutes',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->log) {
            $this->log->validate();
        }
        if (\is_array($this->notificationURLs)) {
            Model::validateArray($this->notificationURLs);
        }
        if (null !== $this->operationInfo) {
            $this->operationInfo->validate();
        }
        if (\is_array($this->orderIds)) {
            Model::validateArray($this->orderIds);
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->resourceProgress) {
            $this->resourceProgress->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkedStackResourceCount) {
            $res['CheckedStackResourceCount'] = $this->checkedStackResourceCount;
        }

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
            $res['Log'] = null !== $this->log ? $this->log->toArray($noStream) : $this->log;
        }

        if (null !== $this->notCheckedStackResourceCount) {
            $res['NotCheckedStackResourceCount'] = $this->notCheckedStackResourceCount;
        }

        if (null !== $this->notificationURLs) {
            if (\is_array($this->notificationURLs)) {
                $res['NotificationURLs'] = [];
                $n1 = 0;
                foreach ($this->notificationURLs as $item1) {
                    $res['NotificationURLs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operationInfo) {
            $res['OperationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toArray($noStream) : $this->operationInfo;
        }

        if (null !== $this->orderIds) {
            if (\is_array($this->orderIds)) {
                $res['OrderIds'] = [];
                $n1 = 0;
                foreach ($this->orderIds as $item1) {
                    $res['OrderIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    if (\is_array($item1)) {
                        $res['Outputs'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Outputs'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['ResourceProgress'] = null !== $this->resourceProgress ? $this->resourceProgress->toArray($noStream) : $this->resourceProgress;
        }

        if (null !== $this->rollbackFailedRootReason) {
            $res['RollbackFailedRootReason'] = $this->rollbackFailedRootReason;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckedStackResourceCount'])) {
            $model->checkedStackResourceCount = $map['CheckedStackResourceCount'];
        }

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

        if (isset($map['NotCheckedStackResourceCount'])) {
            $model->notCheckedStackResourceCount = $map['NotCheckedStackResourceCount'];
        }

        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = [];
                $n1 = 0;
                foreach ($map['NotificationURLs'] as $item1) {
                    $model->notificationURLs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OperationInfo'])) {
            $model->operationInfo = operationInfo::fromMap($map['OperationInfo']);
        }

        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = [];
                $n1 = 0;
                foreach ($map['OrderIds'] as $item1) {
                    $model->orderIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['Outputs'] as $item1) {
                    if (!empty($item1)) {
                        $model->outputs[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->outputs[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
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

        if (isset($map['RollbackFailedRootReason'])) {
            $model->rollbackFailedRootReason = $map['RollbackFailedRootReason'];
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
