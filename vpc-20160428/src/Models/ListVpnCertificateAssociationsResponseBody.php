<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponseBody\vpnCertificateRelations;

class ListVpnCertificateAssociationsResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var vpnCertificateRelations[]
     */
    public $vpnCertificateRelations;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpnCertificateRelations' => 'VpnCertificateRelations',
    ];

    public function validate()
    {
        if (\is_array($this->vpnCertificateRelations)) {
            Model::validateArray($this->vpnCertificateRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vpnCertificateRelations) {
            if (\is_array($this->vpnCertificateRelations)) {
                $res['VpnCertificateRelations'] = [];
                $n1 = 0;
                foreach ($this->vpnCertificateRelations as $item1) {
                    $res['VpnCertificateRelations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VpnCertificateRelations'])) {
            if (!empty($map['VpnCertificateRelations'])) {
                $model->vpnCertificateRelations = [];
                $n1 = 0;
                foreach ($map['VpnCertificateRelations'] as $item1) {
                    $model->vpnCertificateRelations[$n1++] = vpnCertificateRelations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
