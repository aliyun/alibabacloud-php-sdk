<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdatePhoneWebhookRequest extends Model
{
    /**
     * @description SpaceId for ISV sub clients.
     *
     * This parameter is required.
     *
     * @example 293483938849493****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description Whether to use HTTP to receive receipts. Value:
     *   Y: Yes.
     *   N: No.
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
     * @description phone number.
     *
     * This parameter is required.
     *
     * @example 8613800001234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Whether to use queue method to receive receipts. Value:
     *   Y: Yes.
     *   N: No.
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
     * @description HTTP status report interface callback address.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $statusCallbackUrl;

    /**
     * @description HTTP upstream message interface callback address.
     *
     * @example http://aliyun.com
     *
     * @var string
     */
    public $upCallbackUrl;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'httpFlag' => 'HttpFlag',
        'ownerId' => 'OwnerId',
        'phoneNumber' => 'PhoneNumber',
        'queueFlag' => 'QueueFlag',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'statusCallbackUrl' => 'StatusCallbackUrl',
        'upCallbackUrl' => 'UpCallbackUrl',
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
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
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
        if (null !== $this->upCallbackUrl) {
            $res['UpCallbackUrl'] = $this->upCallbackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePhoneWebhookRequest
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
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
        if (isset($map['UpCallbackUrl'])) {
            $model->upCallbackUrl = $map['UpCallbackUrl'];
        }

        return $model;
    }
}
