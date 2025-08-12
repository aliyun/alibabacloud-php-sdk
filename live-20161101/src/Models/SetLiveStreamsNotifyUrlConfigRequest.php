<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class SetLiveStreamsNotifyUrlConfigRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $exceptionNotifyUrl;

    /**
     * @var string
     */
    public $notifyAuthKey;

    /**
     * @var string
     */
    public $notifyReqAuth;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $switchNotifyUrl;
    protected $_name = [
        'domainName' => 'DomainName',
        'exceptionNotifyUrl' => 'ExceptionNotifyUrl',
        'notifyAuthKey' => 'NotifyAuthKey',
        'notifyReqAuth' => 'NotifyReqAuth',
        'notifyUrl' => 'NotifyUrl',
        'ownerId' => 'OwnerId',
        'switchNotifyUrl' => 'SwitchNotifyUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->exceptionNotifyUrl) {
            $res['ExceptionNotifyUrl'] = $this->exceptionNotifyUrl;
        }

        if (null !== $this->notifyAuthKey) {
            $res['NotifyAuthKey'] = $this->notifyAuthKey;
        }

        if (null !== $this->notifyReqAuth) {
            $res['NotifyReqAuth'] = $this->notifyReqAuth;
        }

        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->switchNotifyUrl) {
            $res['SwitchNotifyUrl'] = $this->switchNotifyUrl;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ExceptionNotifyUrl'])) {
            $model->exceptionNotifyUrl = $map['ExceptionNotifyUrl'];
        }

        if (isset($map['NotifyAuthKey'])) {
            $model->notifyAuthKey = $map['NotifyAuthKey'];
        }

        if (isset($map['NotifyReqAuth'])) {
            $model->notifyReqAuth = $map['NotifyReqAuth'];
        }

        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['SwitchNotifyUrl'])) {
            $model->switchNotifyUrl = $map['SwitchNotifyUrl'];
        }

        return $model;
    }
}
