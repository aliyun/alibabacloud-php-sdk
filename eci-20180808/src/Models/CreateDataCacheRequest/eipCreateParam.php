<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateDataCacheRequest;

use AlibabaCloud\Tea\Model;

class eipCreateParam extends Model
{
    /**
     * @description The bandwidth of the EIP. Unit: Mbit/s. Default value: 5.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The EIP bandwidth plan to be associated.
     *
     * @example cbwp-2zeukbj916scmj51m****
     *
     * @var string
     */
    public $commonBandwidthPackage;

    /**
     * @description The line type of the EIP. Valid values:
     *
     *   BGP: BGP (Multi-ISP) line
     *   BGP_PRO: BGP (Multi-ISP) Pro line
     *
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The metering method of the EIP. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-data-transfer
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The ID of the IP address pool. The EIP is allocated from the IP address pool. You cannot use the IP address pool feature by default. To use this feature, you must apply for the privilege in the Quota Center console.
     *
     * @example pippool-2vc4xdtjhwl4t0go5****
     *
     * @var string
     */
    public $publicIpAddressPoolId;
    protected $_name = [
        'bandwidth'              => 'Bandwidth',
        'commonBandwidthPackage' => 'CommonBandwidthPackage',
        'ISP'                    => 'ISP',
        'internetChargeType'     => 'InternetChargeType',
        'publicIpAddressPoolId'  => 'PublicIpAddressPoolId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->commonBandwidthPackage) {
            $res['CommonBandwidthPackage'] = $this->commonBandwidthPackage;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipCreateParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CommonBandwidthPackage'])) {
            $model->commonBandwidthPackage = $map['CommonBandwidthPackage'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }

        return $model;
    }
}
