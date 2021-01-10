<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveRecordNotifyConfigRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $onDemandUrl;

    /**
     * @var bool
     */
    public $needStatusNotify;
    protected $_name = [
        'securityToken'    => 'SecurityToken',
        'ownerId'          => 'OwnerId',
        'domainName'       => 'DomainName',
        'notifyUrl'        => 'NotifyUrl',
        'onDemandUrl'      => 'OnDemandUrl',
        'needStatusNotify' => 'NeedStatusNotify',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->onDemandUrl) {
            $res['OnDemandUrl'] = $this->onDemandUrl;
        }
        if (null !== $this->needStatusNotify) {
            $res['NeedStatusNotify'] = $this->needStatusNotify;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveRecordNotifyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['OnDemandUrl'])) {
            $model->onDemandUrl = $map['OnDemandUrl'];
        }
        if (isset($map['NeedStatusNotify'])) {
            $model->needStatusNotify = $map['NeedStatusNotify'];
        }

        return $model;
    }
}
