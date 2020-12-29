<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDnsGtmAddressPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $monitorConfigId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'addrPoolId'      => 'AddrPoolId',
        'monitorConfigId' => 'MonitorConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDnsGtmAddressPoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }

        return $model;
    }
}
