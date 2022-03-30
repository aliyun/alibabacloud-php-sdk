<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RMC\V20211104\Models;

use AlibabaCloud\SDK\RMC\V20211104\Models\ListResourceRelationshipsResponseBody\resourceRelationships;
use AlibabaCloud\Tea\Model;

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
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'requestId'             => 'RequestId',
        'resourceRelationships' => 'ResourceRelationships',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ResourceRelationships'] = [];
            if (null !== $this->resourceRelationships && \is_array($this->resourceRelationships)) {
                $n = 0;
                foreach ($this->resourceRelationships as $item) {
                    $res['ResourceRelationships'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceRelationshipsResponseBody
     */
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
                $n                            = 0;
                foreach ($map['ResourceRelationships'] as $item) {
                    $model->resourceRelationships[$n++] = null !== $item ? resourceRelationships::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
