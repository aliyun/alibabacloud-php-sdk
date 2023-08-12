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
     * @var int
     */
    public $checkedStackResourceCount;

    /**
     * @description The time when the stack was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2020-09-16T08:21:40
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether deletion protection is enabled for the stack. Valid values:
     *
     *   Enabled: Deletion protection is enabled for the stack.
     *   Disabled: Deletion protection is disabled for the stack. You can delete the stack in the Resource Orchestration Service (ROS) console or by calling the DeleteStack operation.
     *
     * >  Deletion protection of a nested stack works in the same way as that of the root stack.
     * @example Disabled
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description The description of the stack.
     *
     * @example Create a VPC.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether rollback is disabled when the stack fails to be created. Valid values:
     *
     *   true: Rollback is disabled when the stack fails to be created.
     *   false: Rollback is enabled when the stack fails to be created. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description The time when the last successful drift detection operation was performed.
     *
     * @example 2020-09-16T09:21:40
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The description of the web UI in the ROS console.
     *
     * @example {}
     *
     * @var string
     */
    public $interface;

    /**
     * @description The logs of the stack.
     *
     * @var log
     */
    public $log;

    /**
     * @var int
     */
    public $notCheckedStackResourceCount;

    /**
     * @description The callback URLs that are used to receive stack events.
     *
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @description The additional information that is displayed when an error occurs on a stack operation.
     *
     * >  This property is returned in specific conditions. At least one sub-property is returned. For example, an error is reported when you call the API of another cloud service.
     * @var operationInfo
     */
    public $operationInfo;

    /**
     * @var string[]
     */
    public $orderIds;

    /**
     * @description The output parameters of the stack.
     *
     * >  This parameter is returned if the OutputOption parameter is set to Enabled.
     * @var mixed[][]
     */
    public $outputs;

    /**
     * @description The parameters of the stack.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The ID of the parent stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf692****
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @description The name of the RAM role. ROS assumes the RAM role to create the stack and uses credentials of the role to call the APIs of Alibaba Cloud services.
     *
     * The name of the RAM role can be up to 64 bytes in length.
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the region in which the stack is deployed. You can call the [DescribeRegions](~~131035~~) operation to query the most recent list of Alibaba Cloud regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the instances belong.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The creation progress of resources.
     *
     * @var resourceProgress
     */
    public $resourceProgress;

    /**
     * @description The ID of the root stack. This parameter is returned if the specified stack is a nested stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf692****
     *
     * @var string
     */
    public $rootStackId;

    /**
     * @description Indicates whether the stack is a managed stack. Valid values:
     *
     * - false
     * @example false
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The name of the service to which the managed stack belongs.
     *
     * @example ACVS
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The status of the stack in the last successful drift detection. Valid values:
     *
     *   DRIFTED: The stack has drifted.
     *   NOT_CHECKED: No successful drift detection is performed on the stack.
     *   IN_SYNC: The stack is being synchronized.
     *
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @description The ID of the stack.
     *
     * @example c754d2a4-28f1-46df-b557-9586173a****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The name of the stack.
     *
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). It must start with a digit or letter.
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The type of the stack. Valid values:
     *
     *   ROS: The ROS stack, which is created by using an ROS template.
     *   Terraform: The Terraform stack, which is created by using a Terraform template.
     *
     * @example ROS
     *
     * @var string
     */
    public $stackType;

    /**
     * @description The state of the stack. Valid values:
     *
     *   CREATE_IN_PROGRESS: The stack is being created.
     *   CREATE_FAILED: The stack fails to be created.
     *   CREATE_COMPLETE: The stack is created.
     *   UPDATE_IN_PROGRESS: The stack is being updated.
     *   UPDATE_FAILED: The stack fails to be updated.
     *   UPDATE_COMPLETE: The stack is updated.
     *   DELETE_IN_PROGRESS: The stack is being deleted.
     *   DELETE_FAILED: The stack fails to be deleted.
     *   CREATE_ROLLBACK_IN_PROGRESS: The stack is being rolled back after the stack fails to be created.
     *   CREATE_ROLLBACK_FAILED: The stack fails to be rolled back after the stack fails to be created.
     *   CREATE_ROLLBACK_COMPLETE: The stack is rolled back after the stack fails to be created.
     *   ROLLBACK_IN_PROGRESS: The resources in the stack are being rolled back.
     *   ROLLBACK_FAILED: The resources in the stack fail to be rolled back.
     *   ROLLBACK_COMPLETE: The resources in the stack are rolled back.
     *   CHECK_IN_PROGRESS: The stack is being validated.
     *   CHECK_FAILED: The stack fails to be validated.
     *   CHECK_COMPLETE: The stack is validated.
     *   REVIEW_IN_PROGRESS: The stack is being reviewed.
     *   IMPORT_CREATE_IN_PROGRESS: The stack is being created by using imported resources.
     *   IMPORT_CREATE_FAILED: The stack fails to be created by using imported resources.
     *   IMPORT_CREATE_COMPLETE: The stack is created by using imported resources.
     *   IMPORT_CREATE_ROLLBACK_IN_PROGRESS: The resources are being rolled back after the stack fails to be created by using imported resources.
     *   IMPORT_CREATE_ROLLBACK_FAILED: The resources fail to be rolled back after the stack fails to be created by using imported resources.
     *   IMPORT_CREATE_ROLLBACK_COMPLETE: The resources are rolled back after the stack fails to be created by using imported resources.
     *   IMPORT_UPDATE_IN_PROGRESS: The stack is being updated by using imported resources.
     *   IMPORT_UPDATE_FAILED: The stack fails to be updated by using imported resources.
     *   IMPORT_UPDATE_COMPLETE: The stack is updated by using imported resources.
     *   IMPORT_UPDATE_ROLLBACK_IN_PROGRESS: The resources are being rolled back after the stack fails to be updated by using imported resources.
     *   IMPORT_UPDATE_ROLLBACK_FAILED: The resources fail to be rolled back after the stack fails to be updated by using imported resources.
     *   IMPORT_UPDATE_ROLLBACK_COMPLETE: The resources are rolled back after the stack fails to be updated by using imported resources.
     *
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the stack is in its current state.
     *
     * @example Stack CREATE completed successfully
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The tags of the stack.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The description of the template.
     *
     * @example Create a VPC.
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @description The ID of the template. This parameter is returned only if the current template of the stack is a custom template or a shared template.
     *
     * If the template is a shared template, the value of this parameter is the same as the value of the TemplateARN parameter.
     * @example a52f81be-496f-4e1c-a286-8852ab54****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the scenario. This parameter is returned only if the current template of the stack is generated from a scenario.
     *
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The URL of the file that contains the template body. This parameter is returned only if the current template of the stack is from a URL. The URL can point to a template that is located on an HTTP or HTTPS web server or in an Alibaba Cloud Object Storage Service (OSS) bucket.
     *
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version of the template. This parameter is returned only if the current template of the stack is a custom template or a shared template.
     *
     * Valid values: v1 to v100.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The timeout period within which the stack can be created. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description The time when the stack was updated. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2020-09-17T08:21:40
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'checkedStackResourceCount'    => 'CheckedStackResourceCount',
        'createTime'                   => 'CreateTime',
        'deletionProtection'           => 'DeletionProtection',
        'description'                  => 'Description',
        'disableRollback'              => 'DisableRollback',
        'driftDetectionTime'           => 'DriftDetectionTime',
        'interface'                    => 'Interface',
        'log'                          => 'Log',
        'notCheckedStackResourceCount' => 'NotCheckedStackResourceCount',
        'notificationURLs'             => 'NotificationURLs',
        'operationInfo'                => 'OperationInfo',
        'orderIds'                     => 'OrderIds',
        'outputs'                      => 'Outputs',
        'parameters'                   => 'Parameters',
        'parentStackId'                => 'ParentStackId',
        'ramRoleName'                  => 'RamRoleName',
        'regionId'                     => 'RegionId',
        'requestId'                    => 'RequestId',
        'resourceGroupId'              => 'ResourceGroupId',
        'resourceProgress'             => 'ResourceProgress',
        'rootStackId'                  => 'RootStackId',
        'serviceManaged'               => 'ServiceManaged',
        'serviceName'                  => 'ServiceName',
        'stackDriftStatus'             => 'StackDriftStatus',
        'stackId'                      => 'StackId',
        'stackName'                    => 'StackName',
        'stackType'                    => 'StackType',
        'status'                       => 'Status',
        'statusReason'                 => 'StatusReason',
        'tags'                         => 'Tags',
        'templateDescription'          => 'TemplateDescription',
        'templateId'                   => 'TemplateId',
        'templateScratchId'            => 'TemplateScratchId',
        'templateURL'                  => 'TemplateURL',
        'templateVersion'              => 'TemplateVersion',
        'timeoutInMinutes'             => 'TimeoutInMinutes',
        'updateTime'                   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Log'] = null !== $this->log ? $this->log->toMap() : null;
        }
        if (null !== $this->notCheckedStackResourceCount) {
            $res['NotCheckedStackResourceCount'] = $this->notCheckedStackResourceCount;
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
        }
        if (null !== $this->operationInfo) {
            $res['OperationInfo'] = null !== $this->operationInfo ? $this->operationInfo->toMap() : null;
        }
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
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
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }
        if (isset($map['OperationInfo'])) {
            $model->operationInfo = operationInfo::fromMap($map['OperationInfo']);
        }
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
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
