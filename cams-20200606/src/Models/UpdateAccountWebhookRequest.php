<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountWebhookRequest extends Model
{
    /**
     * @description The space ID of the RAM user within the independent software vendor (ISV) account.
     *
     * This parameter is required.
     *
     * @example 293483938849493**
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description Specifies whether to use HTTP callbacks to receive message receipts. Valid values:
     *
     *   Y: indicates that HTTP callbacks are used to receive receipts.
     *   N: indicates that HTTP callbacks are not used to receive receipts.
     *
     * @example Y
     *
     * @var string
     */
    public $httpFlag;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to use Message Service (MNS) queues to receive receipts. Valid values:
     *
     *   Y: indicates that MNS queues are used to receive receipts.
     *   N: indicates that MNS queues are not used to receive receipts.
     *
     * @example N
     *
     * @var string
     */
    public $queueFlag;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The callback URL to which status reports are sent by using HTTP callbacks.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $statusCallbackUrl;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'httpFlag' => 'HttpFlag',
        'ownerId' => 'OwnerId',
        'queueFlag' => 'QueueFlag',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'statusCallbackUrl' => 'StatusCallbackUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->httpFlag) {
            $res['HttpFlag'] = $this->httpFlag;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->queueFlag) {
            $res['QueueFlag'] = $this->queueFlag;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->statusCallbackUrl) {
            $res['StatusCallbackUrl'] = $this->statusCallbackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccountWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['HttpFlag'])) {
            $model->httpFlag = $map['HttpFlag'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QueueFlag'])) {
            $model->queueFlag = $map['QueueFlag'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StatusCallbackUrl'])) {
            $model->statusCallbackUrl = $map['StatusCallbackUrl'];
        }

        return $model;
    }
}
