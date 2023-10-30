<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsResponseBody;

use AlibabaCloud\Tea\Model;

class operationTickets extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $applyUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $applyUsername;

    /**
     * @example 1
     *
     * @var string
     */
    public $assetAccountId;

    /**
     * @example root
     *
     * @var string
     */
    public $assetAccountName;

    /**
     * @example 10.167.66.167
     *
     * @var string
     */
    public $assetAddress;

    /**
     * @example 2
     *
     * @var string
     */
    public $assetId;

    /**
     * @example poros-test
     *
     * @var string
     */
    public $assetName;

    /**
     * @example 2
     *
     * @var string
     */
    public $assetNetworkDomainId;

    /**
     * @example Linux
     *
     * @var string
     */
    public $assetOs;

    /**
     * @example Local
     *
     * @var string
     */
    public $assetSource;

    /**
     * @example 1
     *
     * @var string
     */
    public $assetSourceInstanceId;

    /**
     * @example 1669965908
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $operationTicketId;

    /**
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @example Normal
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'applyUserId'           => 'ApplyUserId',
        'applyUsername'         => 'ApplyUsername',
        'assetAccountId'        => 'AssetAccountId',
        'assetAccountName'      => 'AssetAccountName',
        'assetAddress'          => 'AssetAddress',
        'assetId'               => 'AssetId',
        'assetName'             => 'AssetName',
        'assetNetworkDomainId'  => 'AssetNetworkDomainId',
        'assetOs'               => 'AssetOs',
        'assetSource'           => 'AssetSource',
        'assetSourceInstanceId' => 'AssetSourceInstanceId',
        'createdTime'           => 'CreatedTime',
        'operationTicketId'     => 'OperationTicketId',
        'protocolName'          => 'ProtocolName',
        'state'                 => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyUserId) {
            $res['ApplyUserId'] = $this->applyUserId;
        }
        if (null !== $this->applyUsername) {
            $res['ApplyUsername'] = $this->applyUsername;
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

    /**
     * @param array $map
     *
     * @return operationTickets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyUserId'])) {
            $model->applyUserId = $map['ApplyUserId'];
        }
        if (isset($map['ApplyUsername'])) {
            $model->applyUsername = $map['ApplyUsername'];
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
