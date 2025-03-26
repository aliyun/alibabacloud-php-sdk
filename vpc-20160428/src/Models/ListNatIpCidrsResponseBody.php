<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsResponseBody\natIpCidrs;

class ListNatIpCidrsResponseBody extends Model
{
    /**
     * @var natIpCidrs[]
     */
    public $natIpCidrs;

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
        'natIpCidrs' => 'NatIpCidrs',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->natIpCidrs)) {
            Model::validateArray($this->natIpCidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natIpCidrs) {
            if (\is_array($this->natIpCidrs)) {
                $res['NatIpCidrs'] = [];
                $n1 = 0;
                foreach ($this->natIpCidrs as $item1) {
                    $res['NatIpCidrs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatIpCidrs'])) {
            if (!empty($map['NatIpCidrs'])) {
                $model->natIpCidrs = [];
                $n1 = 0;
                foreach ($map['NatIpCidrs'] as $item1) {
                    $model->natIpCidrs[$n1++] = natIpCidrs::fromMap($item1);
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
