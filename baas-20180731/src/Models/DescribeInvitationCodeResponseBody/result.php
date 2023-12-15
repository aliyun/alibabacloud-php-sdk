<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInvitationCodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $accepted;

    /**
     * @example code
     *
     * @var string
     */
    public $code;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example abc@126.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Id
     *
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $sendTime;

    /**
     * @example 27534
     *
     * @var string
     */
    public $senderBid;

    /**
     * @example 26345345
     *
     * @var int
     */
    public $senderId;

    /**
     * @example uid-35324
     *
     * @var string
     */
    public $senderName;

    /**
     * @description URL
     *
     * @example http://baas.console.aliyun.test/invite?code=92e7ef1934892
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'accepted'     => 'Accepted',
        'code'         => 'Code',
        'consortiumId' => 'ConsortiumId',
        'email'        => 'Email',
        'expireTime'   => 'ExpireTime',
        'id'           => 'Id',
        'sendTime'     => 'SendTime',
        'senderBid'    => 'SenderBid',
        'senderId'     => 'SenderId',
        'senderName'   => 'SenderName',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accepted) {
            $res['Accepted'] = $this->accepted;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->senderBid) {
            $res['SenderBid'] = $this->senderBid;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderName) {
            $res['SenderName'] = $this->senderName;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Accepted'])) {
            $model->accepted = $map['Accepted'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['SenderBid'])) {
            $model->senderBid = $map['SenderBid'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderName'])) {
            $model->senderName = $map['SenderName'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
