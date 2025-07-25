<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveSnapshotNotifyConfigResponseBody extends Model
{
    /**
     * @description The main streaming domain.
     *
     * @example www.yourdomain***.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The callback authentication key.
     *
     * @example yourkey
     *
     * @var string
     */
    public $notifyAuthKey;

    /**
     * @description Indicates whether callback authentication is enabled. Valid values:
     *
     *   **yes**: Callback authentication is enabled.
     *   **no**: Callback authentication is disabled.
     *
     * @example yes
     *
     * @var string
     */
    public $notifyReqAuth;

    /**
     * @description The callback URL.
     *
     * @example http://callback.yourdomain***.com
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The ID of the request.
     *
     * @example 5056369B-D337-499E-B8B7-B761BD37B08A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainName' => 'DomainName',
        'notifyAuthKey' => 'NotifyAuthKey',
        'notifyReqAuth' => 'NotifyReqAuth',
        'notifyUrl' => 'NotifyUrl',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveSnapshotNotifyConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
