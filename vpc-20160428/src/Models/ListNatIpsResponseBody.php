<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsResponseBody\natIps;
use AlibabaCloud\Tea\Model;

class ListNatIpsResponseBody extends Model
{
    /**
     * @var natIps[]
     */
    public $natIps;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
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
