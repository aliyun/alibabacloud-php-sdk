<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveStreamsNotifyUrlConfigRequest extends Model
{
    /**
     * @description The ingest domain.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Exception event callback URL.
     *
     * @example https://4a7e5f08.r37.cpolar.top/live/Rsssd/call-back/streamStart
     *
     * @var string
     */
    public $exceptionNotifyUrl;

    /**
     * @description The authentication key.
     *
     * >  This parameter is required if you set the NotifyReqAuth parameter to **yes**.
     *
     * Value requirements:
     *
     *   The key must be 16 to 64 characters in length.
     *   The key can contain letters and digits.
     *
     * @example 123456
     *
     * @var string
     */
    public $notifyAuthKey;

    /**
     * @description Specifies whether to enable callback authentication. Valid values:
     *
     *   **yes**: enables callback authentication. If you set this parameter to **yes**, you must also specify the NotifyAuthKey parameter.
     *   **no**: disables callback authentication.
     *
     * >  If you do not specify this parameter, the default value **no** is used.
     *
     * For information about the authentication logic, see **Authentication for stream ingest callbacks**.
     *
     * @example yes
     *
     * @var string
     */
    public $notifyReqAuth;

    /**
     * @description The URL to which the stream ingest callbacks are sent.
     *
     * @example http://guide.aliyundoc.com/notify
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetLiveStreamsNotifyUrlConfigRequest
     */
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
