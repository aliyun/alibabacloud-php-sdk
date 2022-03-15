<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeChangeOrderResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeChangeOrderResponseBody\data\pipelines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $approvalId;

    /**
     * @var bool
     */
    public $auto;

    /**
     * @var int
     */
    public $batchCount;

    /**
     * @var string
     */
    public $batchType;

    /**
     * @var int
     */
    public $batchWaitTime;

    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $coType;

    /**
     * @var string
     */
    public $coTypeCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentPipelineId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var pipelines[]
     */
    public $pipelines;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $subStatus;

    /**
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
