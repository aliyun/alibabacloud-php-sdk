<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeChangeOrderResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeChangeOrderResponseBody\data\pipelines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example bbbbb-3fd370b2-3646-4ba6-91f9-9423e19ab0cd-*****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example app-test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The approval ID of the change order.
     *
     * @example 67de0b39-a9d4-4c09-a170-cf438208****
     *
     * @var string
     */
    public $approvalId;

    /**
     * @description Indicates whether SAE automatically determines the release batches. Valid values:
     *
     *   **true**: SAE automatically determines the release batches.
     *   **false**: SAE does not automatically determine the release batches.
     *
     * @example true
     *
     * @var bool
     */
    public $auto;

    /**
     * @description The number of release batches.
     *
     * @example 1
     *
     * @var int
     */
    public $batchCount;

    /**
     * @description The mode in which the release batches are determined. Valid values:
     *
     *   **auto**: SAE automatically determines the release batches.
     *   **Manual**: You must manually determine the release batches.
     *
     * @example auto
     *
     * @var string
     */
    public $batchType;

    /**
     * @description The interval between batches when SAE automatically determines the release batches in a phased release. Unit: minutes.
     *
     * @example 0
     *
     * @var int
     */
    public $batchWaitTime;

    /**
     * @description The ID of the change order.
     *
     * @example 765fa5c0-9ebb-4bb4-b383-1f885447**
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description The description about the change type, which corresponds to the **CoTypeCode** parameter.
     *
     * @var string
     */
    public $coType;

    /**
     * @description The code of the change type. Valid values:
     *
     *   **CoBindSlb**: associates the Server Load Balancer (SLB) instance with the application.
     *   **CoUnbindSlb**: disassociates the SLB instance from the application.
     *   **CoCreateApp**: creates the application.
     *   **CoDeleteApp**: deletes the application.
     *   **CoDeploy**: deploys the application.
     *   **CoRestartApplication**: restarts the application.
     *   **CoRollback**: rolls back the application.
     *   **CoScaleIn**: scales in the application.
     *   **CoScaleOut**: scales out the application.
     *   **CoStart**: starts the application.
     *   **CoStop**: stops the application.
     *   **CoRescaleApplicationVertically**: modifies the instance specifications.
     *   **CoDeployHistroy**: rolls back the application to a historical version.
     *   **CoBindNas**: associates a network-attached storage (NAS) file system with the application.
     *   **CoUnbindNas**: disassociates the NAS file system from the application.
     *   **CoBatchStartApplication**: starts multiple applications concurrently.
     *   **CoBatchStopApplication**: stops multiple applications concurrently.
     *   **CoRestartInstances**: restarts the instances.
     *   **CoDeleteInstances**: deletes the instances.
     *   **CoScaleInAppWithInstances**: reduces the number of specified application instances.
     *
     * @example CoRestartInstances
     *
     * @var string
     */
    public $coTypeCode;

    /**
     * @description The time when the change order was created.
     *
     * @example 2020-12-17 21:06:45
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the current batch.
     *
     * @example 0e4acf82-c9b1-4c1e-ac28-55776338****
     *
     * @var string
     */
    public $currentPipelineId;

    /**
     * @description The description of the change order.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The error message.
     *
     * @example success
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The batch information.
     *
     * @var pipelines[]
     */
    public $pipelines;

    /**
     * @description The status of the change order. Valid values:
     *
     *   **0**: The change order is being prepared.
     *   **1**: The change order is being executed.
     *   **2**: The change order was executed.
     *   **3**: The change order could not be executed.
     *   **6**: The change order was terminated.
     *   **8**: The execution process is pending. You must manually determine the release batch.
     *   **9**: The execution process is pending. SAE will automatically determine the release batches.
     *   **10**: The execution failed due to a system exception.
     *   **11**: The change order is pending approval.
     *   **12**: The change order is approved and is pending execution.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The substatus of the change order. This parameter indicates whether an exception occurred while the change order was being executed. Valid values:
     *
     *   **0**: No exception occurred.
     *   **1**: An exception occurred. For example, when an error occurred during a phased release, you must manually roll back the application. In this case, the change order cannot be completed, so the Status parameter is still displayed as "1", which indicates that the change order is being executed. You can check the value of this parameter to determine whether an exception occurs.
     *
     * @example 0
     *
     * @var int
     */
    public $subStatus;

    /**
     * @description Indicates whether the application can be rolled back. Valid values:
     *
     *   **true**: The application can be rolled back.
     *   **false**: The application cannot be rolled back.
     *
     * @example false
     *
     * @var bool
     */
    public $supportRollback;
    protected $_name = [
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'approvalId'        => 'ApprovalId',
        'auto'              => 'Auto',
        'batchCount'        => 'BatchCount',
        'batchType'         => 'BatchType',
        'batchWaitTime'     => 'BatchWaitTime',
        'changeOrderId'     => 'ChangeOrderId',
        'coType'            => 'CoType',
        'coTypeCode'        => 'CoTypeCode',
        'createTime'        => 'CreateTime',
        'currentPipelineId' => 'CurrentPipelineId',
        'description'       => 'Description',
        'errorMessage'      => 'ErrorMessage',
        'pipelines'         => 'Pipelines',
        'status'            => 'Status',
        'subStatus'         => 'SubStatus',
        'supportRollback'   => 'SupportRollback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }
        if (null !== $this->auto) {
            $res['Auto'] = $this->auto;
        }
        if (null !== $this->batchCount) {
            $res['BatchCount'] = $this->batchCount;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }
        if (null !== $this->coTypeCode) {
            $res['CoTypeCode'] = $this->coTypeCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentPipelineId) {
            $res['CurrentPipelineId'] = $this->currentPipelineId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->pipelines) {
            $res['Pipelines'] = [];
            if (null !== $this->pipelines && \is_array($this->pipelines)) {
                $n = 0;
                foreach ($this->pipelines as $item) {
                    $res['Pipelines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->supportRollback) {
            $res['SupportRollback'] = $this->supportRollback;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ApprovalId'])) {
            $model->approvalId = $map['ApprovalId'];
        }
        if (isset($map['Auto'])) {
            $model->auto = $map['Auto'];
        }
        if (isset($map['BatchCount'])) {
            $model->batchCount = $map['BatchCount'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }
        if (isset($map['CoTypeCode'])) {
            $model->coTypeCode = $map['CoTypeCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentPipelineId'])) {
            $model->currentPipelineId = $map['CurrentPipelineId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Pipelines'])) {
            if (!empty($map['Pipelines'])) {
                $model->pipelines = [];
                $n                = 0;
                foreach ($map['Pipelines'] as $item) {
                    $model->pipelines[$n++] = null !== $item ? pipelines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['SupportRollback'])) {
            $model->supportRollback = $map['SupportRollback'];
        }

        return $model;
    }
}
