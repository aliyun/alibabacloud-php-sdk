<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody\publicIpAddressPoolList;

class ListPublicIpAddressPoolsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var publicIpAddressPoolList[]
     */
    public $publicIpAddressPoolList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'               => 'NextToken',
        'publicIpAddressPoolList' => 'PublicIpAddressPoolList',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->publicIpAddressPoolList)) {
            Model::validateArray($this->publicIpAddressPoolList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->publicIpAddressPoolList) {
            if (\is_array($this->publicIpAddressPoolList)) {
                $res['PublicIpAddressPoolList'] = [];
                $n1                             = 0;
                foreach ($this->publicIpAddressPoolList as $item1) {
                    $res['PublicIpAddressPoolList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PublicIpAddressPoolList'])) {
            if (!empty($map['PublicIpAddressPoolList'])) {
                $model->publicIpAddressPoolList = [];
                $n1                             = 0;
                foreach ($map['PublicIpAddressPoolList'] as $item1) {
                    $model->publicIpAddressPoolList[$n1++] = publicIpAddressPoolList::fromMap($item1);
                }
            }
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
