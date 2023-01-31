<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponseBody\vpnCertificateRelations;
use AlibabaCloud\Tea\Model;

class ListVpnCertificateAssociationsResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example caeba0bbb2be****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 197AF2BD-547F-470C-B29A-8400400233EB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var vpnCertificateRelations[]
     */
    public $vpnCertificateRelations;
    protected $_name = [
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
        'vpnCertificateRelations' => 'VpnCertificateRelations',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['VpnCertificateRelations'] = [];
            if (null !== $this->vpnCertificateRelations && \is_array($this->vpnCertificateRelations)) {
                $n = 0;
                foreach ($this->vpnCertificateRelations as $item) {
                    $res['VpnCertificateRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n                              = 0;
                foreach ($map['VpnCertificateRelations'] as $item) {
                    $model->vpnCertificateRelations[$n++] = null !== $item ? vpnCertificateRelations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
