<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\targets;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\trafficControl;
use AlibabaCloud\Tea\Model;

class changeOrderInfo extends Model
{
    /**
     * @description The number of batches for the change.
     *
     * @example 1
     *
     * @var int
     */
    public $batchCount;

    /**
     * @description Indicates whether the change for the next batch is automatically or manually triggered when phased release is performed. Valid values:
     *
     *   Automatic: The change for the next batch is automatically triggered.
     *   Manual: The change for the next batch is manually triggered.
     *
     * @example Automatic
     *
     * @var string
     */
    public $batchType;

    /**
     * @description The description of the change process.
     *
     * @example Application scale-out
     *
     * @var string
     */
    public $changeOrderDescription;

    /**
     * @description The ID of the change process.
     *
     * @example 1074f3e2-e974-4a0e-****-************
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description The type of the change process.
     *
     * @example Application Scale Out
     *
     * @var string
     */
    public $coType;

    /**
     * @description The time when the change process is created.
     *
     * @example 2019-11-13 14:23:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The person in charge of the change process.
     *
     * @example edas_com***_****@******-*****.***
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description The description of the change process.
     *
     * @example IP of Scale-Out Instance: 47.107.XX.XX
     *
     * @var string
     */
    public $desc;

    /**
     * @description The information about the batches of the change task.
     *
     * @var pipelineInfoList
     */
    public $pipelineInfoList;

    /**
     * @description The state of the change process. Valid values:
     *
     *   0: ready
     *   1: in progress
     *   2: successful
     *   3: failed
     *   6: terminated
     *   7: partially executed
     *   8: wait for manual confirmation to trigger the next batch during a manual phased release
     *   9: wait to trigger the next batch during an automatic phased release
     *   10: failed due to a system exception
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description Indicates whether rollbacks are allowed. Valid values:
     *
     *   true: Rollbacks are allowed.
     *   false: Rollbacks are not allowed.
     *
     * @example false
     *
     * @var bool
     */
    public $supportRollback;

    /**
     * @var targets
     */
    public $targets;

    /**
     * @description The throttling rules.
     *
     * @var trafficControl
     */
    public $trafficControl;
    protected $_name = [
        'batchCount'             => 'BatchCount',
        'batchType'              => 'BatchType',
        'changeOrderDescription' => 'ChangeOrderDescription',
        'changeOrderId'          => 'ChangeOrderId',
        'coType'                 => 'CoType',
        'createTime'             => 'CreateTime',
        'createUserId'           => 'CreateUserId',
        'desc'                   => 'Desc',
        'pipelineInfoList'       => 'PipelineInfoList',
        'status'                 => 'Status',
        'supportRollback'        => 'SupportRollback',
        'targets'                => 'Targets',
        'trafficControl'         => 'TrafficControl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchCount) {
            $res['BatchCount'] = $this->batchCount;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->changeOrderDescription) {
            $res['ChangeOrderDescription'] = $this->changeOrderDescription;
        }
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->pipelineInfoList) {
            $res['PipelineInfoList'] = null !== $this->pipelineInfoList ? $this->pipelineInfoList->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportRollback) {
            $res['SupportRollback'] = $this->supportRollback;
        }
        if (null !== $this->targets) {
            $res['Targets'] = null !== $this->targets ? $this->targets->toMap() : null;
        }
        if (null !== $this->trafficControl) {
            $res['TrafficControl'] = null !== $this->trafficControl ? $this->trafficControl->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeOrderInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchCount'])) {
            $model->batchCount = $map['BatchCount'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['ChangeOrderDescription'])) {
            $model->changeOrderDescription = $map['ChangeOrderDescription'];
        }
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['PipelineInfoList'])) {
            $model->pipelineInfoList = pipelineInfoList::fromMap($map['PipelineInfoList']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportRollback'])) {
            $model->supportRollback = $map['SupportRollback'];
        }
        if (isset($map['Targets'])) {
            $model->targets = targets::fromMap($map['Targets']);
        }
        if (isset($map['TrafficControl'])) {
            $model->trafficControl = trafficControl::fromMap($map['TrafficControl']);
        }

        return $model;
    }
}
