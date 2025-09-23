<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody\resourceShareAssociations;

class ListResourceShareAssociationsResponseBody extends Model
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
     * @var resourceShareAssociations[]
     */
    public $resourceShareAssociations;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceShareAssociations' => 'ResourceShareAssociations',
    ];

    public function validate()
    {
        if (\is_array($this->resourceShareAssociations)) {
            Model::validateArray($this->resourceShareAssociations);
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

        if (null !== $this->resourceShareAssociations) {
            if (\is_array($this->resourceShareAssociations)) {
                $res['ResourceShareAssociations'] = [];
                $n1 = 0;
                foreach ($this->resourceShareAssociations as $item1) {
                    $res['ResourceShareAssociations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceShareAssociations'])) {
            if (!empty($map['ResourceShareAssociations'])) {
                $model->resourceShareAssociations = [];
                $n1 = 0;
                foreach ($map['ResourceShareAssociations'] as $item1) {
                    $model->resourceShareAssociations[$n1] = resourceShareAssociations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
