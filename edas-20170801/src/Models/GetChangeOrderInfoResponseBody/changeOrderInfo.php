<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\targets;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\trafficControl;

class changeOrderInfo extends Model
{
    /**
     * @var int
     */
    public $batchCount;

    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $changeOrderDescription;

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
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var pipelineInfoList
     */
    public $pipelineInfoList;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $supportRollback;

    /**
     * @var targets
     */
    public $targets;

    /**
     * @var trafficControl
     */
    public $trafficControl;
    protected $_name = [
        'batchCount' => 'BatchCount',
        'batchType' => 'BatchType',
        'changeOrderDescription' => 'ChangeOrderDescription',
        'changeOrderId' => 'ChangeOrderId',
        'coType' => 'CoType',
        'createTime' => 'CreateTime',
        'createUserId' => 'CreateUserId',
        'desc' => 'Desc',
        'pipelineInfoList' => 'PipelineInfoList',
        'status' => 'Status',
        'supportRollback' => 'SupportRollback',
        'targets' => 'Targets',
        'trafficControl' => 'TrafficControl',
    ];

    public function validate()
    {
        if (null !== $this->pipelineInfoList) {
            $this->pipelineInfoList->validate();
        }
        if (null !== $this->targets) {
            $this->targets->validate();
        }
        if (null !== $this->trafficControl) {
            $this->trafficControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['PipelineInfoList'] = null !== $this->pipelineInfoList ? $this->pipelineInfoList->toArray($noStream) : $this->pipelineInfoList;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportRollback) {
            $res['SupportRollback'] = $this->supportRollback;
        }

        if (null !== $this->targets) {
            $res['Targets'] = null !== $this->targets ? $this->targets->toArray($noStream) : $this->targets;
        }

        if (null !== $this->trafficControl) {
            $res['TrafficControl'] = null !== $this->trafficControl ? $this->trafficControl->toArray($noStream) : $this->trafficControl;
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
