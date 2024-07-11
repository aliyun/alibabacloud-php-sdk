<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceIdsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceIds extends Model
{
    /**
     * @description The type of the instance. Valid values:
     *
     *   **0**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Insurance mitigation plan
     *   **1**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Unlimited mitigation plan
     *   **2**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the CMA mitigation plan
     *   **3**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Sec-CMA mitigation plan
     *   **9**: Anti-DDoS Proxy (Chinese Mainland) instance of the Profession mitigation plan
     *
     * @example 9
     *
     * @var int
     */
    public $edition;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-zvp2eibz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address-based forwarding mode of the instance. Valid values:
     *
     *   **fnat**: Requests from IPv4 addresses are forwarded to origin servers that use IPv4 addresses and requests from IPv6 addresses are forwarded to origin servers that use IPv6 addresses.
     *   **v6tov4**: All requests are forwarded to origin servers that use IPv4 addresses.
     *
     * @example fnat
     *
     * @var string
     */
    public $ipMode;

    /**
     * @description The IP version of the instance. Valid values:
     *
     *   **Ipv4**
     *   **Ipv6**
     *
     * @example Ipv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The description of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'edition'    => 'Edition',
        'instanceId' => 'InstanceId',
        'ipMode'     => 'IpMode',
        'ipVersion'  => 'IpVersion',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipMode) {
            $res['IpMode'] = $this->ipMode;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpMode'])) {
            $model->ipMode = $map['IpMode'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
