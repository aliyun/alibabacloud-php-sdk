<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMetaEntitiesRequest\attributeFilters;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMetaEntitiesRequest\customAttributeFilters;

class ListMetaEntitiesRequest extends Model
{
    /**
     * @var attributeFilters[]
     */
    public $attributeFilters;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var customAttributeFilters[]
     */
    public $customAttributeFilters;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'attributeFilters' => 'AttributeFilters',
        'comment' => 'Comment',
        'customAttributeFilters' => 'CustomAttributeFilters',
        'entityType' => 'EntityType',
        'maxResults' => 'MaxResults',
        'name' => 'Name',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'sortBy' => 'SortBy',
    ];

    public function validate()
    {
        if (\is_array($this->attributeFilters)) {
            Model::validateArray($this->attributeFilters);
        }
        if (\is_array($this->customAttributeFilters)) {
            Model::validateArray($this->customAttributeFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeFilters) {
            if (\is_array($this->attributeFilters)) {
                $res['AttributeFilters'] = [];
                $n1 = 0;
                foreach ($this->attributeFilters as $item1) {
                    $res['AttributeFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->customAttributeFilters) {
            if (\is_array($this->customAttributeFilters)) {
                $res['CustomAttributeFilters'] = [];
                $n1 = 0;
                foreach ($this->customAttributeFilters as $item1) {
                    $res['CustomAttributeFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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
        if (isset($map['AttributeFilters'])) {
            if (!empty($map['AttributeFilters'])) {
                $model->attributeFilters = [];
                $n1 = 0;
                foreach ($map['AttributeFilters'] as $item1) {
                    $model->attributeFilters[$n1] = attributeFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CustomAttributeFilters'])) {
            if (!empty($map['CustomAttributeFilters'])) {
                $model->customAttributeFilters = [];
                $n1 = 0;
                foreach ($map['CustomAttributeFilters'] as $item1) {
                    $model->customAttributeFilters[$n1] = customAttributeFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
