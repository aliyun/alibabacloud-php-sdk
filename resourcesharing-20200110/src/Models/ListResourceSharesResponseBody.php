<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponseBody\resourceShares;

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
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceShares' => 'ResourceShares',
    ];

    public function validate()
    {
        if (\is_array($this->resourceShares)) {
            Model::validateArray($this->resourceShares);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceShares) {
            if (\is_array($this->resourceShares)) {
                $res['ResourceShares'] = [];
                $n1 = 0;
                foreach ($this->resourceShares as $item1) {
                    $res['ResourceShares'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceShares'])) {
            if (!empty($map['ResourceShares'])) {
                $model->resourceShares = [];
                $n1 = 0;
                foreach ($map['ResourceShares'] as $item1) {
                    $model->resourceShares[$n1] = resourceShares::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
