<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\trafficControl;
use AlibabaCloud\Tea\Model;

class changeOrderInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $changeOrderDescription;

    /**
     * @var int
     */
    public $batchCount;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var bool
     */
    public $supportRollback;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $coType;

    /**
     * @var trafficControl
     */
    public $trafficControl;

    /**
     * @var pipelineInfoList
     */
    public $pipelineInfoList;
    protected $_name = [
        'status'                 => 'Status',
        'createTime'             => 'CreateTime',
        'changeOrderDescription' => 'ChangeOrderDescription',
        'batchCount'             => 'BatchCount',
        'createUserId'           => 'CreateUserId',
        'supportRollback'        => 'SupportRollback',
        'desc'                   => 'Desc',
        'changeOrderId'          => 'ChangeOrderId',
        'batchType'              => 'BatchType',
        'coType'                 => 'CoType',
        'trafficControl'         => 'TrafficControl',
        'pipelineInfoList'       => 'PipelineInfoList',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->changeOrderDescription) {
            $res['ChangeOrderDescription'] = $this->changeOrderDescription;
        }
        if (null !== $this->batchCount) {
            $res['BatchCount'] = $this->batchCount;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->supportRollback) {
            $res['SupportRollback'] = $this->supportRollback;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }
        if (null !== $this->trafficControl) {
            $res['TrafficControl'] = null !== $this->trafficControl ? $this->trafficControl->toMap() : null;
        }
        if (null !== $this->pipelineInfoList) {
            $res['PipelineInfoList'] = null !== $this->pipelineInfoList ? $this->pipelineInfoList->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChangeOrderDescription'])) {
            $model->changeOrderDescription = $map['ChangeOrderDescription'];
        }
        if (isset($map['BatchCount'])) {
            $model->batchCount = $map['BatchCount'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['SupportRollback'])) {
            $model->supportRollback = $map['SupportRollback'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }
        if (isset($map['TrafficControl'])) {
            $model->trafficControl = trafficControl::fromMap($map['TrafficControl']);
        }
        if (isset($map['PipelineInfoList'])) {
            $model->pipelineInfoList = pipelineInfoList::fromMap($map['PipelineInfoList']);
        }

        return $model;
    }
}
