<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponseBody\resourceShares;
use AlibabaCloud\Tea\Model;

class ListResourceSharesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
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
