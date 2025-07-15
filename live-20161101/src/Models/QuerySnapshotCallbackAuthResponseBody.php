<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class QuerySnapshotCallbackAuthResponseBody extends Model
{
    /**
     * @description The callback authentication key.
     *
     * @example yourkey
     *
     * @var string
     */
    public $callbackAuthKey;

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
    public $callbackReqAuth;

    /**
     * @description The main streaming domain.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callbackAuthKey' => 'CallbackAuthKey',
        'callbackReqAuth' => 'CallbackReqAuth',
        'domainName' => 'DomainName',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackAuthKey) {
            $res['CallbackAuthKey'] = $this->callbackAuthKey;
        }
        if (null !== $this->callbackReqAuth) {
            $res['CallbackReqAuth'] = $this->callbackReqAuth;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySnapshotCallbackAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackAuthKey'])) {
            $model->callbackAuthKey = $map['CallbackAuthKey'];
        }
        if (isset($map['CallbackReqAuth'])) {
            $model->callbackReqAuth = $map['CallbackReqAuth'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
