<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceRelationshipsRequest\relatedResourceFilter;

class ListMultiAccountResourceRelationshipsRequest extends Model
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
    public $regionId;

    /**
     * @var relatedResourceFilter[]
     */
    public $relatedResourceFilter;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'relatedResourceFilter' => 'RelatedResourceFilter',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->relatedResourceFilter)) {
            Model::validateArray($this->relatedResourceFilter);
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relatedResourceFilter) {
            if (\is_array($this->relatedResourceFilter)) {
                $res['RelatedResourceFilter'] = [];
                $n1 = 0;
                foreach ($this->relatedResourceFilter as $item1) {
                    $res['RelatedResourceFilter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelatedResourceFilter'])) {
            if (!empty($map['RelatedResourceFilter'])) {
                $model->relatedResourceFilter = [];
                $n1 = 0;
                foreach ($map['RelatedResourceFilter'] as $item1) {
                    $model->relatedResourceFilter[$n1++] = relatedResourceFilter::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
