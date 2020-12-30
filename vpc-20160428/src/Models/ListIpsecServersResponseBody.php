<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers;
use AlibabaCloud\Tea\Model;

class ListIpsecServersResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var ipsecServers[]
     */
    public $ipsecServers;

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
    public $maxResults;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'ipsecServers' => 'IpsecServers',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'maxResults'   => 'MaxResults',
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
        if (null !== $this->ipsecServers) {
            $res['IpsecServers'] = [];
            if (null !== $this->ipsecServers && \is_array($this->ipsecServers)) {
                $n = 0;
                foreach ($this->ipsecServers as $item) {
                    $res['IpsecServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['IpsecServers'])) {
            if (!empty($map['IpsecServers'])) {
                $model->ipsecServers = [];
                $n                   = 0;
                foreach ($map['IpsecServers'] as $item) {
                    $model->ipsecServers[$n++] = null !== $item ? ipsecServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
