<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponseBody\vpnCertificateRelations;
use AlibabaCloud\Tea\Model;

class ListVpnCertificateAssociationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vpnCertificateRelations[]
     */
    public $vpnCertificateRelations;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'totalCount'              => 'TotalCount',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'vpnCertificateRelations' => 'VpnCertificateRelations',
        'maxResults'              => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpnCertificateRelations) {
            $res['VpnCertificateRelations'] = [];
            if (null !== $this->vpnCertificateRelations && \is_array($this->vpnCertificateRelations)) {
                $n = 0;
                foreach ($this->vpnCertificateRelations as $item) {
                    $res['VpnCertificateRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpnCertificateAssociationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpnCertificateRelations'])) {
            if (!empty($map['VpnCertificateRelations'])) {
                $model->vpnCertificateRelations = [];
                $n                              = 0;
                foreach ($map['VpnCertificateRelations'] as $item) {
                    $model->vpnCertificateRelations[$n++] = null !== $item ? vpnCertificateRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
