<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpnCertificateAssociationsResponseBody\vpnCertificateRelations;
use AlibabaCloud\Tea\Model;

class ListVpnCertificateAssociationsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If **NextToken** is not empty, the value indicates the token that is used for the next query.
     *
     * @example caeba0bbb2be****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 197AF2BD-547F-470C-B29A-8400400233EB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The association information.
     *
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
