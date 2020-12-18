<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListResourceShareAssociationsRequest extends Model
{
    /**
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $associationType;

    /**
     * @var string
     */
    public $associationStatus;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'resourceShareIds'  => 'ResourceShareIds',
        'resourceId'        => 'ResourceId',
        'target'            => 'Target',
        'associationType'   => 'AssociationType',
        'associationStatus' => 'AssociationStatus',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
    ];

    public function validate()
    {
        Model::validateRequired('associationType', $this->associationType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->associationType) {
            $res['AssociationType'] = $this->associationType;
        }
        if (null !== $this->associationStatus) {
            $res['AssociationStatus'] = $this->associationStatus;
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
     * @return ListResourceShareAssociationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['AssociationType'])) {
            $model->associationType = $map['AssociationType'];
        }
        if (isset($map['AssociationStatus'])) {
            $model->associationStatus = $map['AssociationStatus'];
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
