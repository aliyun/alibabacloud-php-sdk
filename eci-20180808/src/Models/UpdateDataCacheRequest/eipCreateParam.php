<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheRequest;

use AlibabaCloud\Dara\Model;

class eipCreateParam extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $commonBandwidthPackage;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $publicIpAddressPoolId;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'commonBandwidthPackage' => 'CommonBandwidthPackage',
        'ISP' => 'ISP',
        'internetChargeType' => 'InternetChargeType',
        'publicIpAddressPoolId' => 'PublicIpAddressPoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
