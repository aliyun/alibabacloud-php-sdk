<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponse\resourceShares;
use AlibabaCloud\Tea\Model;

class ListResourceSharesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var resourceShares[]
     */
    public $resourceShares;
    protected $_name = [
        'requestId'      => 'RequestId',
        'nextToken'      => 'NextToken',
        'resourceShares' => 'ResourceShares',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('resourceShares', $this->resourceShares, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListResourceSharesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
