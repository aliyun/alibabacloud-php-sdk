<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CheckVpnBgpEnabledResponseBody extends Model
{
    /**
     * @var bool
     */
    public $bgpEnabled;

    /**
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
