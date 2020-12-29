<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricInvitationCodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $senderId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $senderBid;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var int
     */
    public $invitationId;

    /**
     * @var string
     */
    public $senderName;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $url;

    /**
     * @var bool
     */
    public $accepted;

    /**
     * @var string
     */
    public $sendTime;
    protected $_name = [
        'senderId'     => 'SenderId',
        'email'        => 'Email',
        'senderBid'    => 'SenderBid',
        'expireTime'   => 'ExpireTime',
        'consortiumId' => 'ConsortiumId',
        'invitationId' => 'InvitationId',
        'senderName'   => 'SenderName',
        'code'         => 'Code',
        'url'          => 'Url',
        'accepted'     => 'Accepted',
        'sendTime'     => 'SendTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->senderBid) {
            $res['SenderBid'] = $this->senderBid;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->invitationId) {
            $res['InvitationId'] = $this->invitationId;
        }
        if (null !== $this->senderName) {
            $res['SenderName'] = $this->senderName;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->accepted) {
            $res['Accepted'] = $this->accepted;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['SenderBid'])) {
            $model->senderBid = $map['SenderBid'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['InvitationId'])) {
            $model->invitationId = $map['InvitationId'];
        }
        if (isset($map['SenderName'])) {
            $model->senderName = $map['SenderName'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Accepted'])) {
            $model->accepted = $map['Accepted'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }

        return $model;
    }
}
