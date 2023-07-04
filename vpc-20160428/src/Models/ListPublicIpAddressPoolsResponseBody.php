<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody\publicIpAddressPoolList;
use AlibabaCloud\Tea\Model;

class ListPublicIpAddressPoolsResponseBody extends Model
{
    /**
     * @description The token that determines the start point of the next query. Valid values:
     *
     *   If **NextToken** is returned, it indicates that no additional results exist.
     *   If **NextToken** is returned, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries returned.
     *
     * @var publicIpAddressPoolList[]
     */
    public $publicIpAddressPoolList;

    /**
     * @description The ID of the request.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->publicIpAddressPoolList) {
            $res['PublicIpAddressPoolList'] = [];
            if (null !== $this->publicIpAddressPoolList && \is_array($this->publicIpAddressPoolList)) {
                $n = 0;
                foreach ($this->publicIpAddressPoolList as $item) {
                    $res['PublicIpAddressPoolList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPublicIpAddressPoolsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PublicIpAddressPoolList'])) {
            if (!empty($map['PublicIpAddressPoolList'])) {
                $model->publicIpAddressPoolList = [];
                $n                              = 0;
                foreach ($map['PublicIpAddressPoolList'] as $item) {
                    $model->publicIpAddressPoolList[$n++] = null !== $item ? publicIpAddressPoolList::fromMap($item) : $item;
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
