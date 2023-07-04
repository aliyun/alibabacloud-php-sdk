<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolCidrBlocksResponseBody\publicIpPoolCidrBlockList;
use AlibabaCloud\Tea\Model;

class ListPublicIpAddressPoolCidrBlocksResponseBody extends Model
{
    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If **NextToken** was not returned, it indicates that no additional results exist.
     *   If **NextToken** is returned, the value is the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries returned.
     *
     * @var publicIpPoolCidrBlockList[]
     */
    public $publicIpPoolCidrBlockList;

    /**
     * @description The ID of the request.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The maximum number of entries returned. Valid values: **10** to **100**. Default value: **10**.
     *
     * @example 10
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->publicIpPoolCidrBlockList) {
            $res['PublicIpPoolCidrBlockList'] = [];
            if (null !== $this->publicIpPoolCidrBlockList && \is_array($this->publicIpPoolCidrBlockList)) {
                $n = 0;
                foreach ($this->publicIpPoolCidrBlockList as $item) {
                    $res['PublicIpPoolCidrBlockList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListPublicIpAddressPoolCidrBlocksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PublicIpPoolCidrBlockList'])) {
            if (!empty($map['PublicIpPoolCidrBlockList'])) {
                $model->publicIpPoolCidrBlockList = [];
                $n                                = 0;
                foreach ($map['PublicIpPoolCidrBlockList'] as $item) {
                    $model->publicIpPoolCidrBlockList[$n++] = null !== $item ? publicIpPoolCidrBlockList::fromMap($item) : $item;
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
