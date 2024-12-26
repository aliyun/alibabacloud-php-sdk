<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo;

use AlibabaCloud\Tea\Model;

class internetInfo extends Model
{
    /**
     * @description The Internet bandwidth. Unit: MB/s.
     *
     * Valid values: 1 to 1000.
     * @example 100
     *
     * @var int
     */
    public $flowOutBandwidth;

    /**
     * @description The billing method of Internet usage.
     *
     * Valid values:
     *
     *   payByBandwidth: pay-by-bandwidth. This value is valid only if you enable Internet access.
     *   payByTraffic: pay-by-traffic. This value is valid only if you enable Internet access.
     *   uninvolved: No billing method is involved. This value is valid only if you disable Internet access.
     *
     * This parameter is required.
     * @example uninvolved
     *
     * @var string
     */
    public $flowOutType;

    /**
     * @description Specifies whether to enable the Internet access feature.
     *
     * Valid values:
     *
     *   enable
     *   disable
     *
     * This parameter is required.
     * @example disable
     *
     * @var string
     */
    public $internetSpec;

    /**
     * @description The whitelist that includes the IP addresses that are allowed to access the ApsaraMQ for RocketMQ broker over the Internet. This parameter can be configured only if you use the public endpoint to access the instance.
     *
     *   If you do not configure an IP address whitelist, all CIDR blocks are allowed to access the ApsaraMQ for RocketMQ broker over the Internet.
     *   If you configure an IP address whitelist, only the IP addresses in the whitelist are allowed to access the ApsaraMQ for RocketMQ broker over the Internet.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $ipWhitelist;
    protected $_name = [
        'flowOutBandwidth' => 'flowOutBandwidth',
        'flowOutType'      => 'flowOutType',
        'internetSpec'     => 'internetSpec',
        'ipWhitelist'      => 'ipWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowOutBandwidth) {
            $res['flowOutBandwidth'] = $this->flowOutBandwidth;
        }
        if (null !== $this->flowOutType) {
            $res['flowOutType'] = $this->flowOutType;
        }
        if (null !== $this->internetSpec) {
            $res['internetSpec'] = $this->internetSpec;
        }
        if (null !== $this->ipWhitelist) {
            $res['ipWhitelist'] = $this->ipWhitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flowOutBandwidth'])) {
            $model->flowOutBandwidth = $map['flowOutBandwidth'];
        }
        if (isset($map['flowOutType'])) {
            $model->flowOutType = $map['flowOutType'];
        }
        if (isset($map['internetSpec'])) {
            $model->internetSpec = $map['internetSpec'];
        }
        if (isset($map['ipWhitelist'])) {
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = $map['ipWhitelist'];
            }
        }

        return $model;
    }
}
