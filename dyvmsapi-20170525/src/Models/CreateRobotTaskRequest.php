<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateRobotTaskRequest extends Model
{
    /**
     * @description The calling number.
     *
     * You must use the phone numbers that you have purchased and separate multiple numbers with commas (,). You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home) and choose **Real Number Service** > **Real Number Management** to view the numbers you purchased.
     * @example 0571****5678
     *
     * @var string
     */
    public $caller;

    /**
     * @description The company name, which must be the same as the **enterprise name** on the qualification management page.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $corpName;

    /**
     * @description The ID of the robot or communication script that is used to initiate the call.
     *
     * You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home) and choose **Intelligent Voice Robot** > **Communication Script Management** to view the communication script ID.
     * @example 1000023****
     *
     * @var int
     */
    public $dialogId;

    /**
     * @description Specifies whether to call the self-managed line. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * > If you set this parameter to **true**, calling numbers are not verified.
     * @example false
     *
     * @var bool
     */
    public $isSelfLine;

    /**
     * @description Specifies whether to enable number status identification. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * > If you set this parameter to **true**, the reason why a call is not answered is recorded.
     * @example true
     *
     * @var bool
     */
    public $numberStatusIdent;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The redial interval. Unit: minutes. The value must be greater than 1.
     *
     * > The maximum redial interval is 30 minutes.
     * @example 5
     *
     * @var int
     */
    public $recallInterval;

    /**
     * @description The call state in which redial is required. Separate multiple call states with commas (,). Valid values:
     *
     *   **200010**: The phone of the called party is powered off.
     *   **200011**: The number of the called party is out of service.
     *   **200002**: The line is busy.
     *   **200012**: The call is lost.
     *   **200005**: The called party cannot be connected.
     *   **200003**: The called party does not respond to the call.
     *
     * @example 200010,200011
     *
     * @var string
     */
    public $recallStateCodes;

    /**
     * @description The number of redial times.
     *
     * @example 1
     *
     * @var int
     */
    public $recallTimes;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to enable auto-redial. Valid values:
     *
     *   **1**: enables auto-redial.
     *   **0**: disables auto-redial.
     *
     * @example 1
     *
     * @var int
     */
    public $retryType;

    /**
     * @description The task name. The task name can be up to 30 characters in length.
     *
     * @example Test Template
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'caller'               => 'Caller',
        'corpName'             => 'CorpName',
        'dialogId'             => 'DialogId',
        'isSelfLine'           => 'IsSelfLine',
        'numberStatusIdent'    => 'NumberStatusIdent',
        'ownerId'              => 'OwnerId',
        'recallInterval'       => 'RecallInterval',
        'recallStateCodes'     => 'RecallStateCodes',
        'recallTimes'          => 'RecallTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'retryType'            => 'RetryType',
        'taskName'             => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->isSelfLine) {
            $res['IsSelfLine'] = $this->isSelfLine;
        }
        if (null !== $this->numberStatusIdent) {
            $res['NumberStatusIdent'] = $this->numberStatusIdent;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recallInterval) {
            $res['RecallInterval'] = $this->recallInterval;
        }
        if (null !== $this->recallStateCodes) {
            $res['RecallStateCodes'] = $this->recallStateCodes;
        }
        if (null !== $this->recallTimes) {
            $res['RecallTimes'] = $this->recallTimes;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->retryType) {
            $res['RetryType'] = $this->retryType;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRobotTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['IsSelfLine'])) {
            $model->isSelfLine = $map['IsSelfLine'];
        }
        if (isset($map['NumberStatusIdent'])) {
            $model->numberStatusIdent = $map['NumberStatusIdent'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecallInterval'])) {
            $model->recallInterval = $map['RecallInterval'];
        }
        if (isset($map['RecallStateCodes'])) {
            $model->recallStateCodes = $map['RecallStateCodes'];
        }
        if (isset($map['RecallTimes'])) {
            $model->recallTimes = $map['RecallTimes'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RetryType'])) {
            $model->retryType = $map['RetryType'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
