<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListVpnCertificateAssociationsRequest extends Model
{
    /**
     * @var string[]
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $vpnGatewayId;
    protected $_name = [
        'certificateId'   => 'CertificateId',
        'certificateType' => 'CertificateType',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'vpnGatewayId'    => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListVpnCertificateAssociationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            if (!empty($map['CertificateId'])) {
                $model->certificateId = $map['CertificateId'];
            }
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpnGatewayId'])) {
            if (!empty($map['VpnGatewayId'])) {
                $model->vpnGatewayId = $map['VpnGatewayId'];
            }
        }

        return $model;
    }
}
