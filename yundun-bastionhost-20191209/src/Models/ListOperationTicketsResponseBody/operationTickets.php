<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsResponseBody;

use AlibabaCloud\Tea\Model;

class operationTickets extends Model
{
    /**
     * @description The ID of the O\\&M applicant.
     *
     * @example 1
     *
     * @var string
     */
    public $applyUserId;

    /**
     * @description The username of the O\\&M applicant.
     *
     * @example test
     *
     * @var string
     */
    public $applyUsername;

    /**
     * @description The remarks entered when the O\\&M personnel applies for O\\&M permissions.
     *
     * @example Apply for O\\&M
     *
     * @var string
     */
    public $approveComment;

    /**
     * @description The ID of the asset account.
     *
     * @example 1
     *
     * @var string
     */
    public $assetAccountId;

    /**
     * @description The username of the asset account.
     *
     * @example root
     *
     * @var string
     */
    public $assetAccountName;

    /**
     * @description The IP address of the asset.
     *
     * @example 10.167.XX.XX
     *
     * @var string
     */
    public $assetAddress;

    /**
     * @description The ID of the asset.
     *
     * @example 2
     *
     * @var string
     */
    public $assetId;

    /**
     * @description The name of the asset.
     *
     * @example poros-test
     *
     * @var string
     */
    public $assetName;

    /**
     * @description The network domain ID of the asset.
     *
     * @example 2
     *
     * @var string
     */
    public $assetNetworkDomainId;

    /**
     * @description The operating system of the asset.
     *
     * @example Linux
     *
     * @var string
     */
    public $assetOs;

    /**
     * @description The name of the asset source to which the asset belongs. Valid values:
     *
     *   **Local**: an on-premises host.
     *   **Ecs**: an Elastic Compute Service (ECS) instance.
     *   **Rds**: an ApsaraDB RDS instance.
     *   A third-party asset source.
     *
     * @example Local
     *
     * @var string
     */
    public $assetSource;

    /**
     * @description The ID of the asset source to which the asset belongs.
     *
     * @example 1
     *
     * @var string
     */
    public $assetSourceInstanceId;

    /**
     * @description The time when the O\\&M application was submitted. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1669965908
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The maximum number of logons applied by the O\\&M engineer. Valid values:
     *
     *   **0**: The number of logons is unlimited. The O\\&M engineer can log on to the specified asset for unlimited times during the validity period.
     *   **1**: The O\\&M engineer can log on to the specified asset only once during the validity period.
     *
     * @example 0
     *
     * @var int
     */
    public $effectCount;

    /**
     * @description The end time of the validity period. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1679393152
     *
     * @var int
     */
    public $effectEndTime;

    /**
     * @description The start time of the validity period. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1685600242
     *
     * @var int
     */
    public $effectStartTime;

    /**
     * @description The ID of the O\\&M application to be reviewed.
     *
     * @example 1
     *
     * @var string
     */
    public $operationTicketId;

    /**
     * @description The O\\&M protocol.
     *
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @description The status of the review. Valid value:
     *
     *   Normal: to be reviewed
     *
     * @example Normal
     *
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

    public function validate() {}

    public function toMap()
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
