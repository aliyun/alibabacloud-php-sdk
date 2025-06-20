<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceRelationshipsResponseBody\resourceRelationships;

class ListResourceRelationshipsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceRelationships[]
     */
    public $resourceRelationships;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceRelationships' => 'ResourceRelationships',
    ];

    public function validate()
    {
        if (\is_array($this->resourceRelationships)) {
            Model::validateArray($this->resourceRelationships);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceRelationships) {
            if (\is_array($this->resourceRelationships)) {
                $res['ResourceRelationships'] = [];
                $n1 = 0;
                foreach ($this->resourceRelationships as $item1) {
                    $res['ResourceRelationships'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceRelationships'])) {
            if (!empty($map['ResourceRelationships'])) {
                $model->resourceRelationships = [];
                $n1 = 0;
                foreach ($map['ResourceRelationships'] as $item1) {
                    $model->resourceRelationships[$n1] = resourceRelationships::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
