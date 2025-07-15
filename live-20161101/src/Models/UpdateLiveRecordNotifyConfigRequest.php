<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveRecordNotifyConfigRequest extends Model
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
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $needStatusNotify;

    /**
     * @description The callback URL that is used to receive notifications about recording events and status.
     *
     * >
     *
     *   The URL must start with `http://` or `https://`.
     *
     *   You must use URLEncoder for encoding. This way, the system can identify Chinese characters, spaces, and special characters.
     *
     * This parameter is required.
     *
     * @example http://learn.aliyundoc.com/examplecallback.action
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The callback URL for on-demand recordings.
     *
     * >
     *
     *   The URL must start with `http://` or `https://`.
     *
     *   You must use URLEncoder for encoding. This way, the system can identify Chinese characters, spaces, and special characters.
     *
     * @example http://guide.aliyundoc.com/ondemandcallback.action
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
     * @return UpdateLiveRecordNotifyConfigRequest
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
