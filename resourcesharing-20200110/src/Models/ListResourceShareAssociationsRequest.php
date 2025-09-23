<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;

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
    public $resourceArn;

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
        'associationType' => 'AssociationType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceArn' => 'ResourceArn',
        'resourceId' => 'ResourceId',
        'resourceShareIds' => 'ResourceShareIds',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (\is_array($this->resourceShareIds)) {
            Model::validateArray($this->resourceShareIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceShareIds) {
            if (\is_array($this->resourceShareIds)) {
                $res['ResourceShareIds'] = [];
                $n1 = 0;
                foreach ($this->resourceShareIds as $item1) {
                    $res['ResourceShareIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
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

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = [];
                $n1 = 0;
                foreach ($map['ResourceShareIds'] as $item1) {
                    $model->resourceShareIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
