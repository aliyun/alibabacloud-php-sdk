<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class TriggerChatFlowRequest extends Model
{
    /**
     * @description The declared occurrence time of the event, usually the time when the request was constructed, in milliseconds timestamp.
     *
     * @example 1731502129000
     *
     * @var int
     */
    public $claimTimeMillis;

    /**
     * @description Input parameters in Key-Value format. The Key must match the input strategy configured at the start node of your flow.
     *
     * @example {"my_biz_data_0": "hi", "my_biz_data_1": "1024"}
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description The time when the event should be discarded, i.e., the expiration time. If this field is specified, the message will be discarded if it exceeds this time, in milliseconds timestamp.
     *
     * @example 1731502729000
     *
     * @var int
     */
    public $discardTimeMillis;

    /**
     * @description Flow code.
     *
     * This parameter is required.
     *
     * @example f4912c16943b4dfba44bd6fedacf8c70
     *
     * @var string
     */
    public $flowCode;

    /**
     * @description External system transaction number, used to associate with external business system transactions. You can retrieve this parameter within the flow after triggering.
     *
     * @example 8d4acf7e-e360-eb83-6d74-fcf9c4538fda
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Unique event ID used for idempotent triggers. Do not include any business semantics; you can retrieve this parameter within the flow after triggering.
     *
     * @example c68622e6-5f0d-c8a4-af41-e949c2a7580e
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'claimTimeMillis' => 'ClaimTimeMillis',
        'data' => 'Data',
        'discardTimeMillis' => 'DiscardTimeMillis',
        'flowCode' => 'FlowCode',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->claimTimeMillis) {
            $res['ClaimTimeMillis'] = $this->claimTimeMillis;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->discardTimeMillis) {
            $res['DiscardTimeMillis'] = $this->discardTimeMillis;
        }
        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerChatFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClaimTimeMillis'])) {
            $model->claimTimeMillis = $map['ClaimTimeMillis'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DiscardTimeMillis'])) {
            $model->discardTimeMillis = $map['DiscardTimeMillis'];
        }
        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
