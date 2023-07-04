<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListVpnCertificateAssociationsRequest extends Model
{
    /**
     * @description The list of certificate IDs.
     *
     * You can query the association between at most 20 SSL certificates and VPN gateways.
     * @example 6bfe4218-ea1d****
     *
     * @var string[]
     */
    public $certificateId;

    /**
     * @description The certificate type. Valid values:
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
     * @description The number of entries to return on each page. Valid values: **1** to **20**. Default value: **1**.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example caeba0bbb2be0****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the VPN gateway.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of VPN gateway IDs.
     *
     * You can query the association between at most 20 VPN gateways and SSL certificates.
     * @example vpn-bp1q8bgx4xnkm****
     *
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
