<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsResponseBody\natIps;
use AlibabaCloud\Tea\Model;

class ListNatIpsResponseBody extends Model
{
    /**
     * @description The list of IP addresses of the NAT gateway.
     *
     * @var natIps[]
     */
    public $natIps;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If the value of **NextToken** is not returned, it indicates that no next query is to be sent.
     *   If the value of **NextToken** is returned, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 7E78CEEA-BF8F-44D1-9DCD-D9141135B71E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of IP addresses that are returned.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'natIps'     => 'NatIps',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natIps) {
            $res['NatIps'] = [];
            if (null !== $this->natIps && \is_array($this->natIps)) {
                $n = 0;
                foreach ($this->natIps as $item) {
                    $res['NatIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListNatIpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatIps'])) {
            if (!empty($map['NatIps'])) {
                $model->natIps = [];
                $n             = 0;
                foreach ($map['NatIps'] as $item) {
                    $model->natIps[$n++] = null !== $item ? natIps::fromMap($item) : $item;
                }
            }
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
