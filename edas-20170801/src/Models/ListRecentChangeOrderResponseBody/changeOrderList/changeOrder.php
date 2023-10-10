<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody\changeOrderList;

use AlibabaCloud\Tea\Model;

class changeOrder extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of batches for the change. Valid values: 1 to 5.
     *
     * @example 1
     *
     * @var int
     */
    public $batchCount;

    /**
     * @description The way in which the next batch is triggered during a phased release. Valid values:
     *
     *   Automatic
     *   Manual
     *
     * @example Automatic
     *
     * @var string
     */
    public $batchType;

    /**
     * @description The description of the change process.
     *
     * @example Version: 2020-05-14 20:02:33 | Deployment Package: hsf-pandora-boot-provider-1.0.jar | Deploy to: all groups
     *
     * @var string
     */
    public $changeOrderDescription;

    /**
     * @description The unique ID of the change process.
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
     * @description The type of the change process.
     *
     * @example CoDeploy
     *
     * @var string
     */
    public $coTypeCode;

    /**
     * @description The time when the change process was created.
     *
     * @example 2019-11-13 14:23:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The user who created the change process.
     *
     * @example edas_test1@aliyun-test.com
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description The time when the change process ended.
     *
     * @example 2019-11-13 14:24:02
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the application instance group on which the change was performed.
     *
     * @example 8123db90-880f-486f-****-************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The source of the change. Valid values:
     *
     *   console: the Enterprise Distributed Application Service (EDAS) console
     *   pop: the POP API or tool
     *
     * @example pop
     *
     * @var string
     */
    public $source;

    /**
     * @description The state of the change process. Valid values:
     *
     *   0: ready to start execution
     *   1: in progress
     *   2: successful
     *   3: failed
     *   6: terminated
     *   8: waiting for manual confirmation (You can see the state when you manually confirm the execution of the next batch of the change.)
     *   9: waiting for automatic execution
     *   10: failed due to a system error
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the user who created the change process.
     *
     * @example 1432536****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'                  => 'AppId',
        'batchCount'             => 'BatchCount',
        'batchType'              => 'BatchType',
        'changeOrderDescription' => 'ChangeOrderDescription',
        'changeOrderId'          => 'ChangeOrderId',
        'coType'                 => 'CoType',
        'coTypeCode'             => 'CoTypeCode',
        'createTime'             => 'CreateTime',
        'createUserId'           => 'CreateUserId',
        'finishTime'             => 'FinishTime',
        'groupId'                => 'GroupId',
        'source'                 => 'Source',
        'status'                 => 'Status',
        'userId'                 => 'UserId',
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
        if (null !== $this->coTypeCode) {
            $res['CoTypeCode'] = $this->coTypeCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
     * @return changeOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
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
        if (isset($map['CoTypeCode'])) {
            $model->coTypeCode = $map['CoTypeCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
