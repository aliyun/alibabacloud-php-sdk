<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class vpnCertificateRelations extends Model
{
    /**
     * @var string
     */
    public $associationTime;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $regionId;

    /**
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
