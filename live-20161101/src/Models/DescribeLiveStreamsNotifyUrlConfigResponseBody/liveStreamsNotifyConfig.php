<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyUrlConfigResponseBody;

use AlibabaCloud\Tea\Model;

class liveStreamsNotifyConfig extends Model
{
    /**
     * @description The ingest domain.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Exception event callback URL.
     *
     * @example https://4a7e5f08.r37.cpolar.top/live/Record/call-back/streamException
     *
     * @var string
     */
    public $exceptionNotifyUrl;

    /**
     * @description The authentication key.
     *
     * @example 123456
     *
     * @var string
     */
    public $notifyAuthKey;

    /**
     * @description Indicates whether callback authentication is enabled. Valid values:
     *
     *   yes
     *   no
     *
     * @example yes
     *
     * @var string
     */
    public $notifyReqAuth;

    /**
     * @description The callback URL.
     *
     * @example http://guide.aliyundoc.com/notify
     *
     * @var string
     */
    public $notifyUrl;
    protected $_name = [
        'domainName' => 'DomainName',
        'exceptionNotifyUrl' => 'ExceptionNotifyUrl',
        'notifyAuthKey' => 'NotifyAuthKey',
        'notifyReqAuth' => 'NotifyReqAuth',
        'notifyUrl' => 'NotifyUrl',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamsNotifyConfig
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

        return $model;
    }
}
