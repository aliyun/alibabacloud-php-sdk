<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecondaryPublicIpAddressesResponseBody;

use AlibabaCloud\Dara\Model;

class secondaryPublicIpAddresses extends Model
{
    /**
     * @var int
     */
    public $cidrMask;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $gateway;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $secondaryPublicIpAddress;

    /**
     * @var string
     */
    public $secondaryPublicIpId;
    protected $_name = [
        'cidrMask' => 'CidrMask',
        'creationTime' => 'CreationTime',
        'ensRegionId' => 'EnsRegionId',
        'gateway' => 'Gateway',
        'ipVersion' => 'IpVersion',
        'isp' => 'Isp',
        'secondaryPublicIpAddress' => 'SecondaryPublicIpAddress',
        'secondaryPublicIpId' => 'SecondaryPublicIpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrMask) {
            $res['CidrMask'] = $this->cidrMask;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->secondaryPublicIpAddress) {
            $res['SecondaryPublicIpAddress'] = $this->secondaryPublicIpAddress;
        }

        if (null !== $this->secondaryPublicIpId) {
            $res['SecondaryPublicIpId'] = $this->secondaryPublicIpId;
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
        if (isset($map['CidrMask'])) {
            $model->cidrMask = $map['CidrMask'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['SecondaryPublicIpAddress'])) {
            $model->secondaryPublicIpAddress = $map['SecondaryPublicIpAddress'];
        }

        if (isset($map['SecondaryPublicIpId'])) {
            $model->secondaryPublicIpId = $map['SecondaryPublicIpId'];
        }

        return $model;
    }
}
