<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\WhatsappCallRequest\session;

class WhatsappCallRequest extends Model
{
    /**
     * @var string
     */
    public $businessNumber;

    /**
     * @var string
     */
    public $callAction;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $custSpaceId;

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
     * @var session
     */
    public $session;

    /**
     * @var string
     */
    public $userNumber;
    protected $_name = [
        'businessNumber' => 'BusinessNumber',
        'callAction' => 'CallAction',
        'callId' => 'CallId',
        'custSpaceId' => 'CustSpaceId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'session' => 'Session',
        'userNumber' => 'UserNumber',
    ];

    public function validate()
    {
        if (null !== $this->session) {
            $this->session->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessNumber) {
            $res['BusinessNumber'] = $this->businessNumber;
        }

        if (null !== $this->callAction) {
            $res['CallAction'] = $this->callAction;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
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

        if (null !== $this->session) {
            $res['Session'] = null !== $this->session ? $this->session->toArray($noStream) : $this->session;
        }

        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
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
        if (isset($map['BusinessNumber'])) {
            $model->businessNumber = $map['BusinessNumber'];
        }

        if (isset($map['CallAction'])) {
            $model->callAction = $map['CallAction'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
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

        if (isset($map['Session'])) {
            $model->session = session::fromMap($map['Session']);
        }

        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }

        return $model;
    }
}
