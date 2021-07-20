<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetStackResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $parentStackId;

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
    public $rootStackId;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var string
     */
    public $stackType;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var mixed[][]
     */
    public $outputs;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceProgress
     */
    public $resourceProgress;
    protected $_name = [
        'status'              => 'Status',
        'description'         => 'Description',
        'parameters'          => 'Parameters',
        'requestId'           => 'RequestId',
        'statusReason'        => 'StatusReason',
        'parentStackId'       => 'ParentStackId',
        'createTime'          => 'CreateTime',
        'deletionProtection'  => 'DeletionProtection',
        'rootStackId'         => 'RootStackId',
        'templateDescription' => 'TemplateDescription',
        'stackType'           => 'StackType',
        'ramRoleName'         => 'RamRoleName',
        'updateTime'          => 'UpdateTime',
        'outputs'             => 'Outputs',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'regionId'            => 'RegionId',
        'stackDriftStatus'    => 'StackDriftStatus',
        'notificationURLs'    => 'NotificationURLs',
        'disableRollback'     => 'DisableRollback',
        'stackName'           => 'StackName',
        'tags'                => 'Tags',
        'timeoutInMinutes'    => 'TimeoutInMinutes',
        'stackId'             => 'StackId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceProgress'    => 'ResourceProgress',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->parentStackId) {
            $res['ParentStackId'] = $this->parentStackId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->rootStackId) {
            $res['RootStackId'] = $this->rootStackId;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->stackType) {
            $res['StackType'] = $this->stackType;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
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
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceProgress) {
            $res['ResourceProgress'] = null !== $this->resourceProgress ? $this->resourceProgress->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['ParentStackId'])) {
            $model->parentStackId = $map['ParentStackId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['RootStackId'])) {
            $model->rootStackId = $map['RootStackId'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['StackType'])) {
            $model->stackType = $map['StackType'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = $map['Outputs'];
            }
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
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
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceProgress'])) {
            $model->resourceProgress = resourceProgress::fromMap($map['ResourceProgress']);
        }

        return $model;
    }
}
