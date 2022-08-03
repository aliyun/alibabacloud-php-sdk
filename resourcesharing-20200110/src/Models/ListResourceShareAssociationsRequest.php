<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListResourceShareAssociationsRequest extends Model
{
    /**
     * @var string
     */
    public $associationStatus;

    /**
     * @var string
     */
    public $associationType;

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
    public $resourceId;

    /**
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'associationStatus' => 'AssociationStatus',
        'associationType'   => 'AssociationType',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'resourceId'        => 'ResourceId',
        'resourceShareIds'  => 'ResourceShareIds',
        'target'            => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationStatus) {
            $res['AssociationStatus'] = $this->associationStatus;
        }
        if (null !== $this->associationType) {
            $res['AssociationType'] = $this->associationType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceShareAssociationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationStatus'])) {
            $model->associationStatus = $map['AssociationStatus'];
        }
        if (isset($map['AssociationType'])) {
            $model->associationType = $map['AssociationType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
