<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->certificateId)) {
            Model::validateArray($this->certificateId);
        }
        if (\is_array($this->vpnGatewayId)) {
            Model::validateArray($this->vpnGatewayId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateId) {
            if (\is_array($this->certificateId)) {
                $res['CertificateId'] = [];
                $n1                   = 0;
                foreach ($this->certificateId as $item1) {
                    $res['CertificateId'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->vpnGatewayId)) {
                $res['VpnGatewayId'] = [];
                $n1                  = 0;
                foreach ($this->vpnGatewayId as $item1) {
                    $res['VpnGatewayId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['CertificateId'])) {
            if (!empty($map['CertificateId'])) {
                $model->certificateId = [];
                $n1                   = 0;
                foreach ($map['CertificateId'] as $item1) {
                    $model->certificateId[$n1++] = $item1;
                }
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
                $model->vpnGatewayId = [];
                $n1                  = 0;
                foreach ($map['VpnGatewayId'] as $item1) {
                    $model->vpnGatewayId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
