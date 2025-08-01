<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class gatewayEntry extends Model
{
    /**
     * @example gw-*****5c2cd6144f4bfa1c32289f45ea8.cn-hangzhou.alicloudapi.com
     *
     * @var string
     */
    public $entryDomain;

    /**
     * @var int[]
     */
    public $httpPorts;

    /**
     * @var int[]
     */
    public $httpsPorts;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @example PUB_NET
     *
     * @var string
     */
    public $netType;
    protected $_name = [
        'entryDomain' => 'EntryDomain',
        'httpPorts' => 'HttpPorts',
        'httpsPorts' => 'HttpsPorts',
        'ipList' => 'IpList',
        'netType' => 'NetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->entryDomain) {
            $res['EntryDomain'] = $this->entryDomain;
        }
        if (null !== $this->httpPorts) {
            $res['HttpPorts'] = $this->httpPorts;
        }
        if (null !== $this->httpsPorts) {
            $res['HttpsPorts'] = $this->httpsPorts;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntryDomain'])) {
            $model->entryDomain = $map['EntryDomain'];
        }
        if (isset($map['HttpPorts'])) {
            if (!empty($map['HttpPorts'])) {
                $model->httpPorts = $map['HttpPorts'];
            }
        }
        if (isset($map['HttpsPorts'])) {
            if (!empty($map['HttpsPorts'])) {
                $model->httpsPorts = $map['HttpsPorts'];
            }
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        return $model;
    }
}
