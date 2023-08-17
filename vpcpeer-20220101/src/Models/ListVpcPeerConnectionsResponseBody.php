<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models;

use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponseBody\vpcPeerConnects;
use AlibabaCloud\Tea\Model;

class ListVpcPeerConnectionsResponseBody extends Model
{
    /**
     * @description The number of entries per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If no value is returned for **NextToken**, no next queries are sent.
     *   If the value of **NextToken** is returned, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED39DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The details of the VPC peering connections.
     *
     * @var vpcPeerConnects[]
     */
    public $vpcPeerConnects;
    protected $_name = [
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'vpcPeerConnects' => 'VpcPeerConnects',
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
        if (null !== $this->vpcPeerConnects) {
            $res['VpcPeerConnects'] = [];
            if (null !== $this->vpcPeerConnects && \is_array($this->vpcPeerConnects)) {
                $n = 0;
                foreach ($this->vpcPeerConnects as $item) {
                    $res['VpcPeerConnects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcPeerConnectionsResponseBody
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
        if (isset($map['VpcPeerConnects'])) {
            if (!empty($map['VpcPeerConnects'])) {
                $model->vpcPeerConnects = [];
                $n                      = 0;
                foreach ($map['VpcPeerConnects'] as $item) {
                    $model->vpcPeerConnects[$n++] = null !== $item ? vpcPeerConnects::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
