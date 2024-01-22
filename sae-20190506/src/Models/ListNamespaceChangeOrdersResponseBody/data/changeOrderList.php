<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespaceChangeOrdersResponseBody\data;

use AlibabaCloud\Tea\Model;

class changeOrderList extends Model
{
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
     *   **manual**: You must manually determine the release batches.
     *
     * @var string
     */
    public $batchType;

    /**
     * @description The ID of the change order.
     *
     * @example 7fa5c0-9ebb-4bb4-b383-1f885447****
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description The type of the change order, which corresponds the **CoTypeCode** parameter.
     *
     * @example msg.docker.app.actions.CoBatchStartApplication
     *
     * @var string
     */
    public $coType;

    /**
     * @description The code of the change order type. Valid values:
     *
     *   **CoBatchStartApplication**: starts multiple applications concurrently.
     *   **CoBatchStopApplication**: stops multiple applications concurrently.
     *
     * @example CoBatchStartApplication
     *
     * @var string
     */
    public $coTypeCode;

    /**
     * @description The time when the change order was created.
     *
     * @example 2019-07-11 15:54:49
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the user who created the change order.
     *
     * @example test@aliyun.com
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description The description of the change order.
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the change order was completed.
     *
     * @example 2019-07-11 20:12:58
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the group.
     *
     * @example c9ecd2-cf6c-46c3-9f20-525de202****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-shanghai:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The information about release batches.
     *
     * @example xxxx
     *
     * @var string
     */
    public $pipelines;

    /**
     * @description The source of the change order.
     *
     * @example console
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the change order. Valid values:
     *
     *   **0**: The change order is being prepared.
     *   **1**: The change order is being executed.
     *   **2**: The change order was executed.
     *   **3**: The change order could not be executed.
     *   **6**: The change order was terminated.
     *   **10**: The change order could not be executed due to a system exception.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the user.
     *
     * @example test_sae
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'batchCount'    => 'BatchCount',
        'batchType'     => 'BatchType',
        'changeOrderId' => 'ChangeOrderId',
        'coType'        => 'CoType',
        'coTypeCode'    => 'CoTypeCode',
        'createTime'    => 'CreateTime',
        'createUserId'  => 'CreateUserId',
        'description'   => 'Description',
        'finishTime'    => 'FinishTime',
        'groupId'       => 'GroupId',
        'namespaceId'   => 'NamespaceId',
        'pipelines'     => 'Pipelines',
        'source'        => 'Source',
        'status'        => 'Status',
        'userId'        => 'UserId',
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
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->pipelines) {
            $res['Pipelines'] = $this->pipelines;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeOrderList
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
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Pipelines'])) {
            $model->pipelines = $map['Pipelines'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
