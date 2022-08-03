<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListSharedResourcesRequest extends Model
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
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceOwner;

    /**
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'resourceIds'      => 'ResourceIds',
        'resourceOwner'    => 'ResourceOwner',
        'resourceShareIds' => 'ResourceShareIds',
        'resourceType'     => 'ResourceType',
        'target'           => 'Target',
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
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSharedResourcesRequest
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
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
