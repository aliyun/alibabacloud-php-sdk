<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecondaryPublicIpAddressesResponseBody;

use AlibabaCloud\Tea\Model;

class secondaryPublicIpAddresses extends Model
{
    /**
     * @description The subnet mask of the CIDR block.
     *
     * @example 24
     *
     * @var int
     */
    public $cidrMask;

    /**
     * @description The time when the secondary public IP address was created. The time is displayed in UTC.
     *
     * @example 2023-07-25T09:43:49Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-beijing-15
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The gateway.
     *
     * @example 12.XXX.XXX.1
     *
     * @var string
     */
    public $gateway;

    /**
     * @description The version of the IP address. Valid values:
     *
     *   **ipv4**
     *   **ipv6**
     *
     * @example ipv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The Internet service provider. Valid values:
     *
     *   cmcc: China Mobile.
     *   unicom: China Unicom.
     *   telecom: China Telecom.
     *
     * @example telecom
     *
     * @var string
     */
    public $isp;

    /**
     * @description The secondary public IP address.
     *
     * @example 12.XXX.XXX.4
     *
     * @var string
     */
    public $secondaryPublicIpAddress;

    /**
     * @description The ID of the secondary public IP address.
     *
     * @example spi-5wys0pio93c9f9ukzj2f2fwyr
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return secondaryPublicIpAddresses
     */
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
