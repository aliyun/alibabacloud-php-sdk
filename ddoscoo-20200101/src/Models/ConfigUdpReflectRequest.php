<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigUdpReflectRequest extends Model
{
    /**
     * @description The configuration of the filtering policy for UDP reflection attacks.
     *
     * The value is a string that consists of a JSON struct. The JSON struct contains the following field:
     *
     *   **UdpSports**: the source ports of the UDP traffic that you want to block. This field is required and must be of the ARRAY type. Example: `[17,19]`.
     *
     * We recommend that you block the following source ports of UDP traffic:
     *
     *   UDP 17: QOTD reflection attacks
     *   UDP 19: CharGEN reflection attacks
     *   UDP 69: TFTP reflection attacks
     *   UDP 111: Portmap reflection attacks
     *   UDP 123: NTP reflection attacks
     *   UDP 137: NetBIOS reflection attacks
     *   UDP 161: SNMPv2 reflection attacks
     *   UDP 389: CLDAP reflection attacks
     *   UDP 1194: OpenVPN reflection attacks
     *   UDP 1900: SSDP reflection attacks
     *   UDP 3389: RDP reflection attacks
     *   UDP 11211: memcached reflection attacks
     *
     * This parameter is required.
     * @example {\\"UdpSports\\":[17,19]}
     *
     * @var string
     */
    public $config;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example ddoscoo-cn-i7m25564****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the Anti-DDoS Proxy instance. Valid values:
     *
     *   **cn-hangzhou**: indicates an Anti-DDoS Proxy (Chinese Mainland) instance. This is the default value.
     *   **ap-southeast-1**: indicates an Anti-DDoS Proxy (Outside Chinese Mainland) instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'config'     => 'Config',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigUdpReflectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
