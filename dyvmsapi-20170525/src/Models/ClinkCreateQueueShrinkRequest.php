<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkCreateQueueShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $chatLocation;

    /**
     * @var int
     */
    public $chatMaxWait;

    /**
     * @var int
     */
    public $chatStrategy;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $ibAllowed;

    /**
     * @var int
     */
    public $joinEmpty;

    /**
     * @var int
     */
    public $maxPauseClientFlag;

    /**
     * @var int
     */
    public $maxPauseClientType;

    /**
     * @var int
     */
    public $maxPauseClientValue;

    /**
     * @var int
     */
    public $maxWait;

    /**
     * @var int
     */
    public $memberTimeout;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $qno;

    /**
     * @var string
     */
    public $queueMembersShrink;

    /**
     * @var int
     */
    public $queueTimeout;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $sayCno;

    /**
     * @var int
     */
    public $serviceLevel;

    /**
     * @var int
     */
    public $strategy;

    /**
     * @var int
     */
    public $vipSupport;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var int
     */
    public $wrapupTime;
    protected $_name = [
        'chatLocation' => 'ChatLocation',
        'chatMaxWait' => 'ChatMaxWait',
        'chatStrategy' => 'ChatStrategy',
        'enterpriseId' => 'EnterpriseId',
        'ibAllowed' => 'IbAllowed',
        'joinEmpty' => 'JoinEmpty',
        'maxPauseClientFlag' => 'MaxPauseClientFlag',
        'maxPauseClientType' => 'MaxPauseClientType',
        'maxPauseClientValue' => 'MaxPauseClientValue',
        'maxWait' => 'MaxWait',
        'memberTimeout' => 'MemberTimeout',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'qno' => 'Qno',
        'queueMembersShrink' => 'QueueMembers',
        'queueTimeout' => 'QueueTimeout',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sayCno' => 'SayCno',
        'serviceLevel' => 'ServiceLevel',
        'strategy' => 'Strategy',
        'vipSupport' => 'VipSupport',
        'weight' => 'Weight',
        'wrapupTime' => 'WrapupTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatLocation) {
            $res['ChatLocation'] = $this->chatLocation;
        }

        if (null !== $this->chatMaxWait) {
            $res['ChatMaxWait'] = $this->chatMaxWait;
        }

        if (null !== $this->chatStrategy) {
            $res['ChatStrategy'] = $this->chatStrategy;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->ibAllowed) {
            $res['IbAllowed'] = $this->ibAllowed;
        }

        if (null !== $this->joinEmpty) {
            $res['JoinEmpty'] = $this->joinEmpty;
        }

        if (null !== $this->maxPauseClientFlag) {
            $res['MaxPauseClientFlag'] = $this->maxPauseClientFlag;
        }

        if (null !== $this->maxPauseClientType) {
            $res['MaxPauseClientType'] = $this->maxPauseClientType;
        }

        if (null !== $this->maxPauseClientValue) {
            $res['MaxPauseClientValue'] = $this->maxPauseClientValue;
        }

        if (null !== $this->maxWait) {
            $res['MaxWait'] = $this->maxWait;
        }

        if (null !== $this->memberTimeout) {
            $res['MemberTimeout'] = $this->memberTimeout;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
        }

        if (null !== $this->queueMembersShrink) {
            $res['QueueMembers'] = $this->queueMembersShrink;
        }

        if (null !== $this->queueTimeout) {
            $res['QueueTimeout'] = $this->queueTimeout;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sayCno) {
            $res['SayCno'] = $this->sayCno;
        }

        if (null !== $this->serviceLevel) {
            $res['ServiceLevel'] = $this->serviceLevel;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        if (null !== $this->vipSupport) {
            $res['VipSupport'] = $this->vipSupport;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        if (null !== $this->wrapupTime) {
            $res['WrapupTime'] = $this->wrapupTime;
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
        if (isset($map['ChatLocation'])) {
            $model->chatLocation = $map['ChatLocation'];
        }

        if (isset($map['ChatMaxWait'])) {
            $model->chatMaxWait = $map['ChatMaxWait'];
        }

        if (isset($map['ChatStrategy'])) {
            $model->chatStrategy = $map['ChatStrategy'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['IbAllowed'])) {
            $model->ibAllowed = $map['IbAllowed'];
        }

        if (isset($map['JoinEmpty'])) {
            $model->joinEmpty = $map['JoinEmpty'];
        }

        if (isset($map['MaxPauseClientFlag'])) {
            $model->maxPauseClientFlag = $map['MaxPauseClientFlag'];
        }

        if (isset($map['MaxPauseClientType'])) {
            $model->maxPauseClientType = $map['MaxPauseClientType'];
        }

        if (isset($map['MaxPauseClientValue'])) {
            $model->maxPauseClientValue = $map['MaxPauseClientValue'];
        }

        if (isset($map['MaxWait'])) {
            $model->maxWait = $map['MaxWait'];
        }

        if (isset($map['MemberTimeout'])) {
            $model->memberTimeout = $map['MemberTimeout'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        if (isset($map['QueueMembers'])) {
            $model->queueMembersShrink = $map['QueueMembers'];
        }

        if (isset($map['QueueTimeout'])) {
            $model->queueTimeout = $map['QueueTimeout'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SayCno'])) {
            $model->sayCno = $map['SayCno'];
        }

        if (isset($map['ServiceLevel'])) {
            $model->serviceLevel = $map['ServiceLevel'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        if (isset($map['VipSupport'])) {
            $model->vipSupport = $map['VipSupport'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        if (isset($map['WrapupTime'])) {
            $model->wrapupTime = $map['WrapupTime'];
        }

        return $model;
    }
}
