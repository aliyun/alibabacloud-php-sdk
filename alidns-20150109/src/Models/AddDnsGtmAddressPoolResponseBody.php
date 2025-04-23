<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class AddDnsGtmAddressPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $monitorConfigId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addrPoolId' => 'AddrPoolId',
        'monitorConfigId' => 'MonitorConfigId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }

        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }

        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
