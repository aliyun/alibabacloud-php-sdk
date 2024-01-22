<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListChangeOrdersResponseBody\data;

use AlibabaCloud\Tea\Model;

class changeOrderList extends Model
{
    /**
     * @description The number of entries returned on each page.
     *
     * @example 164341c-9708-4967-b3ec-24933767****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the user who created the change order.
     *
     * @example 1
     *
     * @var int
     */
    public $batchCount;

    /**
     * @description The ID of the group.
     *
     * @example auto
     *
     * @var string
     */
    public $batchType;

    /**
     * @description The mode in which the release batches are determined. Valid values:
     *
     *   **auto**: SAE automatically determines the release batches.
     *   **manual**: You must manually determine the release batches.
     *
     * @example 7fa5c0-9ebb-4bb4-b383-1f885447****
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description The ID of the application.
     *
     * @var string
     */
    public $coType;

    /**
     * @description The ID of the change order.
     *
     * @example CoCreateApp
     *
     * @var string
     */
    public $coTypeCode;

    /**
     * @description The ID of the user.
     *
     * @example 2019-07-11 15:54:49
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The code of the change type. Valid values:
     *
     *   **CoBindSlb**: associates an SLB instance with the application.
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
     *   **CoBindNas**: associates a NAS file system with the application.
     *   **CoUnbindNas**: disassociates the NAS file system from the application.
     *   **CoBatchStartApplication**: starts multiple applications concurrently.
     *   **CoBatchStopApplication**: stops multiple applications concurrently.
     *   **CoRestartInstances**: restarts the instances.
     *   **CoDeleteInstances**: deletes the instances.
     *   **CoScaleInAppWithInstances**: reduces the number of the specified application instances.
     *
     * @example sae-beta-test
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description The change type, which corresponds to the **CoTypeCode** parameter.
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the change order was created.
     *
     * @example 2019-07-11 20:12:58
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The description about the application.
     *
     * @example c9ecd2-cf6c-46c3-9f20-525de202****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of release batches.
     *
     * @example console
     *
     * @var string
     */
    public $source;

    /**
     * @description The time when the change order was completed.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The source of the change order.
     *
     * @example sae-beta-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'         => 'AppId',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
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
