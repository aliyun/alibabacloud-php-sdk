<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveRecordNotifyConfigRequest extends Model
{
    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to enable callbacks for recording status. Valid values:
     *
     *   true: enables callbacks for recording status. If you set this parameter to **true**, an example of recording status callback is returned.
     *   false (default): disables callbacks for recording status.
     *
     * @example false
     *
     * @var bool
     */
    public $needStatusNotify;

    /**
     * @description The callback URL that is used to receive notifications about recording events and status.
     *
     * >  The URL must start with `http://` or `https://`. For more information, see [Callbacks for live stream recording](https://help.aliyun.com/document_detail/55016.html).
     *
     * This parameter is required.
     *
     * @example http://demo.aliyundoc.com/examplecallback.action
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The callback URL for on-demand recordings.
     *
     * >  The URL must start with `http://` or `https://`. For more information, see [On-demand recording](https://help.aliyun.com/document_detail/85910.html).
     *
     * @example http://learn.aliyundoc.com/ondemandcallback.action
     *
     * @var string
     */
    public $onDemandUrl;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'domainName' => 'DomainName',
        'needStatusNotify' => 'NeedStatusNotify',
        'notifyUrl' => 'NotifyUrl',
        'onDemandUrl' => 'OnDemandUrl',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->needStatusNotify) {
            $res['NeedStatusNotify'] = $this->needStatusNotify;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->onDemandUrl) {
            $res['OnDemandUrl'] = $this->onDemandUrl;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveRecordNotifyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['NeedStatusNotify'])) {
            $model->needStatusNotify = $map['NeedStatusNotify'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['OnDemandUrl'])) {
            $model->onDemandUrl = $map['OnDemandUrl'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
