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
     * @description The metering method for Internet usage.
     *
     * Valid values:
     *
     *   payByBandwidth: pay-by-bandwidth. If the Internet access feature is enabled, specify this value for the parameter.
     *   uninvolved: N/A. If the Internet access feature is disabled, specify this value for the parameter.
     *
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
     * By default, ApsaraMQ for RocketMQ instances are accessed in VPCs. If you enable the Internet access feature, you are charged for Internet outbound bandwidth. For more information, see [Internet access fee](~~427240~~).
     * @example disable
     *
     * @var string
     */
    public $internetSpec;

    /**
     * @description The whitelist that includes the IP addresses that are allowed to access the ApsaraMQ for RocketMQ broker over the Internet. This parameter can be configured only when you use a public endpoint to access the ApsaraMQ for RocketMQ broker.
     *
     *   If this parameter is not configured, all IP addresses are allowed to access the ApsaraMQ for RocketMQ broker over the Internet.
     *   If this parameter is configured, only the IP addresses that are included in the whitelist can access the ApsaraMQ for RocketMQ broker over the Internet.
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
