<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsResponseBody;

use AlibabaCloud\Dara\Model;

class operationTickets extends Model
{
    /**
     * @var string
     */
    public $applyUserId;

    /**
     * @var string
     */
    public $applyUsername;

    /**
     * @var string
     */
    public $approveComment;

    /**
     * @var string
     */
    public $assetAccountId;

    /**
     * @var string
     */
    public $assetAccountName;

    /**
     * @var string
     */
    public $assetAddress;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetNetworkDomainId;

    /**
     * @var string
     */
    public $assetOs;

    /**
     * @var string
     */
    public $assetSource;

    /**
     * @var string
     */
    public $assetSourceInstanceId;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var int
     */
    public $effectCount;

    /**
     * @var int
     */
    public $effectEndTime;

    /**
     * @var int
     */
    public $effectStartTime;

    /**
     * @var string
     */
    public $operationTicketId;

    /**
     * @var string
     */
    public $protocolName;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'applyUserId' => 'ApplyUserId',
        'applyUsername' => 'ApplyUsername',
        'approveComment' => 'ApproveComment',
        'assetAccountId' => 'AssetAccountId',
        'assetAccountName' => 'AssetAccountName',
        'assetAddress' => 'AssetAddress',
        'assetId' => 'AssetId',
        'assetName' => 'AssetName',
        'assetNetworkDomainId' => 'AssetNetworkDomainId',
        'assetOs' => 'AssetOs',
        'assetSource' => 'AssetSource',
        'assetSourceInstanceId' => 'AssetSourceInstanceId',
        'createdTime' => 'CreatedTime',
        'effectCount' => 'EffectCount',
        'effectEndTime' => 'EffectEndTime',
        'effectStartTime' => 'EffectStartTime',
        'operationTicketId' => 'OperationTicketId',
        'protocolName' => 'ProtocolName',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyUserId) {
            $res['ApplyUserId'] = $this->applyUserId;
        }

        if (null !== $this->applyUsername) {
            $res['ApplyUsername'] = $this->applyUsername;
        }

        if (null !== $this->approveComment) {
            $res['ApproveComment'] = $this->approveComment;
        }

        if (null !== $this->assetAccountId) {
            $res['AssetAccountId'] = $this->assetAccountId;
        }

        if (null !== $this->assetAccountName) {
            $res['AssetAccountName'] = $this->assetAccountName;
        }

        if (null !== $this->assetAddress) {
            $res['AssetAddress'] = $this->assetAddress;
        }

        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }

        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetNetworkDomainId) {
            $res['AssetNetworkDomainId'] = $this->assetNetworkDomainId;
        }

        if (null !== $this->assetOs) {
            $res['AssetOs'] = $this->assetOs;
        }

        if (null !== $this->assetSource) {
            $res['AssetSource'] = $this->assetSource;
        }

        if (null !== $this->assetSourceInstanceId) {
            $res['AssetSourceInstanceId'] = $this->assetSourceInstanceId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->effectCount) {
            $res['EffectCount'] = $this->effectCount;
        }

        if (null !== $this->effectEndTime) {
            $res['EffectEndTime'] = $this->effectEndTime;
        }

        if (null !== $this->effectStartTime) {
            $res['EffectStartTime'] = $this->effectStartTime;
        }

        if (null !== $this->operationTicketId) {
            $res['OperationTicketId'] = $this->operationTicketId;
        }

        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['ApplyUserId'])) {
            $model->applyUserId = $map['ApplyUserId'];
        }

        if (isset($map['ApplyUsername'])) {
            $model->applyUsername = $map['ApplyUsername'];
        }

        if (isset($map['ApproveComment'])) {
            $model->approveComment = $map['ApproveComment'];
        }

        if (isset($map['AssetAccountId'])) {
            $model->assetAccountId = $map['AssetAccountId'];
        }

        if (isset($map['AssetAccountName'])) {
            $model->assetAccountName = $map['AssetAccountName'];
        }

        if (isset($map['AssetAddress'])) {
            $model->assetAddress = $map['AssetAddress'];
        }

        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }

        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetNetworkDomainId'])) {
            $model->assetNetworkDomainId = $map['AssetNetworkDomainId'];
        }

        if (isset($map['AssetOs'])) {
            $model->assetOs = $map['AssetOs'];
        }

        if (isset($map['AssetSource'])) {
            $model->assetSource = $map['AssetSource'];
        }

        if (isset($map['AssetSourceInstanceId'])) {
            $model->assetSourceInstanceId = $map['AssetSourceInstanceId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['EffectCount'])) {
            $model->effectCount = $map['EffectCount'];
        }

        if (isset($map['EffectEndTime'])) {
            $model->effectEndTime = $map['EffectEndTime'];
        }

        if (isset($map['EffectStartTime'])) {
            $model->effectStartTime = $map['EffectStartTime'];
        }

        if (isset($map['OperationTicketId'])) {
            $model->operationTicketId = $map['OperationTicketId'];
        }

        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
