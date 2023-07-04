<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CheckVpnBgpEnabledResponseBody extends Model
{
    /**
     * @description Indicates whether the BGP feature is supported in the current region.
     *
     *   **true**: supported.
     *   **false**: not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $bgpEnabled;

    /**
     * @description The ID of the request.
     *
     * @example DF448D2E-215D-334F-B10D-7C3B087EF996
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bgpEnabled' => 'BgpEnabled',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpEnabled) {
            $res['BgpEnabled'] = $this->bgpEnabled;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckVpnBgpEnabledResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpEnabled'])) {
            $model->bgpEnabled = $map['BgpEnabled'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
