<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponseBody\vpcPeerConnects;

class ListVpcPeerConnectionsResponseBody extends Model
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
        if (\is_array($this->vpcPeerConnects)) {
            Model::validateArray($this->vpcPeerConnects);
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

        if (null !== $this->vpcPeerConnects) {
            if (\is_array($this->vpcPeerConnects)) {
                $res['VpcPeerConnects'] = [];
                $n1                     = 0;
                foreach ($this->vpcPeerConnects as $item1) {
                    $res['VpcPeerConnects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VpcPeerConnects'])) {
            if (!empty($map['VpcPeerConnects'])) {
                $model->vpcPeerConnects = [];
                $n1                     = 0;
                foreach ($map['VpcPeerConnects'] as $item1) {
                    $model->vpcPeerConnects[$n1++] = vpcPeerConnects::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
