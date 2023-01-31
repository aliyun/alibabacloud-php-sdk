<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers;
use AlibabaCloud\Tea\Model;

class ListIpsecServersResponseBody extends Model
{
    /**
     * @var ipsecServers[]
     */
    public $ipsecServers;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B457
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ipsecServers' => 'IpsecServers',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipsecServers) {
            $res['IpsecServers'] = [];
            if (null !== $this->ipsecServers && \is_array($this->ipsecServers)) {
                $n = 0;
                foreach ($this->ipsecServers as $item) {
                    $res['IpsecServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpsecServersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpsecServers'])) {
            if (!empty($map['IpsecServers'])) {
                $model->ipsecServers = [];
                $n                   = 0;
                foreach ($map['IpsecServers'] as $item) {
                    $model->ipsecServers[$n++] = null !== $item ? ipsecServers::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
