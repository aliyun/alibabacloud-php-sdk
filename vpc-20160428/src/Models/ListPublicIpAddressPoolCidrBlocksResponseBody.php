<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolCidrBlocksResponseBody\publicIpPoolCidrBlockList;

class ListPublicIpAddressPoolCidrBlocksResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var publicIpPoolCidrBlockList[]
     */
    public $publicIpPoolCidrBlockList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'                 => 'NextToken',
        'publicIpPoolCidrBlockList' => 'PublicIpPoolCidrBlockList',
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->publicIpPoolCidrBlockList)) {
            Model::validateArray($this->publicIpPoolCidrBlockList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->publicIpPoolCidrBlockList) {
            if (\is_array($this->publicIpPoolCidrBlockList)) {
                $res['PublicIpPoolCidrBlockList'] = [];
                $n1                               = 0;
                foreach ($this->publicIpPoolCidrBlockList as $item1) {
                    $res['PublicIpPoolCidrBlockList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PublicIpPoolCidrBlockList'])) {
            if (!empty($map['PublicIpPoolCidrBlockList'])) {
                $model->publicIpPoolCidrBlockList = [];
                $n1                               = 0;
                foreach ($map['PublicIpPoolCidrBlockList'] as $item1) {
                    $model->publicIpPoolCidrBlockList[$n1++] = publicIpPoolCidrBlockList::fromMap($item1);
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
