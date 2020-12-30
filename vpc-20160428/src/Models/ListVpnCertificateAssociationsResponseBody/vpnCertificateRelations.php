<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class vpnCertificateRelations extends Model
{
    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $associationTime;

    /**
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'certificateType' => 'CertificateType',
        'associationTime' => 'AssociationTime',
        'vpnGatewayId'    => 'VpnGatewayId',
        'certificateId'   => 'CertificateId',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->associationTime) {
            $res['AssociationTime'] = $this->associationTime;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['AssociationTime'])) {
            $model->associationTime = $map['AssociationTime'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
