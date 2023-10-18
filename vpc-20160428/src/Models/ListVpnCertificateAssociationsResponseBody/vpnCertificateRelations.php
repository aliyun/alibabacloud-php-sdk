<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class vpnCertificateRelations extends Model
{
    /**
     * @description The time when the Anycast EIP was associated.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2020-12-29T09:30:29Z
     *
     * @var string
     */
    public $associationTime;

    /**
     * @description The certificate ID.
     *
     * @example 6bfe4218-ea1d****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The type of the certificate.
     *
     *   **Encryption**
     *   **Signature**
     *
     * @example Signature
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description The ID of the region where the VPN gateway is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1usbiorilk51760****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'associationTime' => 'AssociationTime',
        'certificateId'   => 'CertificateId',
        'certificateType' => 'CertificateType',
        'regionId'        => 'RegionId',
        'vpnGatewayId'    => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationTime) {
            $res['AssociationTime'] = $this->associationTime;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnCertificateRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationTime'])) {
            $model->associationTime = $map['AssociationTime'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
