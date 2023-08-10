<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponseBody\resourceShares;
use AlibabaCloud\Tea\Model;

class ListResourceSharesResponseBody extends Model
{
    /**
     * @description The `token` that is used to initiate the next request. If the response of the current request is truncated, you can use the token to initiate another request and obtain the remaining records.
     *
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the resource shares.
     *
     * @var resourceShares[]
     */
    public $resourceShares;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'resourceShares' => 'ResourceShares',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceShares) {
            $res['ResourceShares'] = [];
            if (null !== $this->resourceShares && \is_array($this->resourceShares)) {
                $n = 0;
                foreach ($this->resourceShares as $item) {
                    $res['ResourceShares'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceSharesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceShares'])) {
            if (!empty($map['ResourceShares'])) {
                $model->resourceShares = [];
                $n                     = 0;
                foreach ($map['ResourceShares'] as $item) {
                    $model->resourceShares[$n++] = null !== $item ? resourceShares::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
