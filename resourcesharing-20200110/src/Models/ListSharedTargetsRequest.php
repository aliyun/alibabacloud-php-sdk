<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListSharedTargetsRequest extends Model
{
    /**
     * @var string
     */
    public $resourceOwner;

    /**
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @var string[]
     */
    public $targets;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'resourceOwner'    => 'ResourceOwner',
        'resourceShareIds' => 'ResourceShareIds',
        'targets'          => 'Targets',
        'resourceType'     => 'ResourceType',
        'resourceId'       => 'ResourceId',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
    ];

    public function validate()
    {
        Model::validateRequired('resourceOwner', $this->resourceOwner, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSharedTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = $map['Targets'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
