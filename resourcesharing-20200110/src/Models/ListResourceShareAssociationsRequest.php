<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListResourceShareAssociationsRequest extends Model
{
    /**
     * @description The association status. Valid values:
     *
     *   Associating: The entity is being associated.
     *   Associated: The entity is associated.
     *   Failed: The entity fails to be associated.
     *   Disassociating: The entity is being disassociated.
     *   Disassociated: The entity is disassociated.
     *
     * >  The system deletes the records of entities in the `Failed` or `Disassociated` state within 48 hours to 96 hours.
     * @example Associated
     *
     * @var string
     */
    public $associationStatus;

    /**
     * @description The association type. Valid values:
     *
     *   Resource
     *   Target
     *
     * @example Resource
     *
     * @var string
     */
    public $associationType;

    /**
     * @description The maximum number of entries to return for a single request.
     *
     * Valid values: 1 to 100. Default value: 20.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The `token` that is used to initiate the next request. If the response of the current request is truncated, you can use the token to initiate another request and obtain the remaining records.
     *
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the resource.
     *
     * >  This parameter is unavailable if you set the `AssociationType` parameter to `Target`.
     * @example vsw-bp183p93qs667muql****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example rs-6GRmdD3X****
     *
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @description The ID of the principal.
     *
     * >  This parameter is unavailable if you set the `AssociationType` parameter to `Resource`.
     * @example 172050525300****
     *
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
