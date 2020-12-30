<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListVpnCertificateAssociationsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $vpnGatewayId;

    /**
     * @var string[]
     */
    public $certificateId;

    /**
     * @var string
     */
    public $callerBid;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'certificateType' => 'CertificateType',
        'nextToken'       => 'NextToken',
        'maxResults'      => 'MaxResults',
        'vpnGatewayId'    => 'VpnGatewayId',
        'certificateId'   => 'CertificateId',
        'callerBid'       => 'callerBid',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->callerBid) {
            $res['callerBid'] = $this->callerBid;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['VpnGatewayId'])) {
            if (!empty($map['VpnGatewayId'])) {
                $model->vpnGatewayId = $map['VpnGatewayId'];
            }
        }
        if (isset($map['CertificateId'])) {
            if (!empty($map['CertificateId'])) {
                $model->certificateId = $map['CertificateId'];
            }
        }
        if (isset($map['callerBid'])) {
            $model->callerBid = $map['callerBid'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
