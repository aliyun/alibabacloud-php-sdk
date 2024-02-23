<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryCallDetailByCallIdRequest extends Model
{
    /**
     * @description The unique ID of the call.
     *
     * >
     *
     *   The CallId parameter is included in the response parameters of the outbound call operation that you call to initiate a call.
     *
     *   The date when the call specified by CallId is started must be the same as the date specified by QueryDate.
     *
     *   The value of CallId must match the value of ProdId.
     *
     * @example 116014888060^10281631****
     *
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The service ID. Valid values:
     *
     *   **11000000300006**: voice notification. You can call the [SingleCallByVoice](https://help.aliyun.com/document_detail/393517.html) operation to send a voice notification of the voice notification file type to the specified number.
     *   **11010000138001**: voice verification code. You can call the [SingleCallByTts](https://help.aliyun.com/document_detail/393519.html) operation to send a voice verification code or a text-to-speech (TTS) voice notification to the specified number.
     *   **11000000300005**: IVR. You can call the [IvrCall](https://help.aliyun.com/document_detail/393521.html) operation to initiate an interactive voice call to the specified number.
     *   **11000000300009**: Session Initiation Protocol (SIP) call.
     *   **11030000180001**: intelligent outbound call.
     *
     * @example 11000000300006
     *
     * @var int
     */
    public $prodId;

    /**
     * @description The time at which call details are queried. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * > The system queries the call records that are generated within 24 hours after the specified point in time. For example, if you specify the time 20:00:01 on November 21, 2022, the system queries the call records that are generated for the specified call ID from 20:00:01 on November 21, 2022, to 20:00:01 on November 22, 2022.
     * @example 1671552000000
     *
     * @var int
     */
    public $queryDate;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'callId'               => 'CallId',
        'ownerId'              => 'OwnerId',
        'prodId'               => 'ProdId',
        'queryDate'            => 'QueryDate',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prodId) {
            $res['ProdId'] = $this->prodId;
        }
        if (null !== $this->queryDate) {
            $res['QueryDate'] = $this->queryDate;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCallDetailByCallIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProdId'])) {
            $model->prodId = $map['ProdId'];
        }
        if (isset($map['QueryDate'])) {
            $model->queryDate = $map['QueryDate'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
