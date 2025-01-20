<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsResponseBody\resourceRelations\resourceRelationList;

class resourceRelations extends Model
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
     * @var resourceRelationList[]
     */
    public $resourceRelationList;
    protected $_name = [
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'resourceRelationList' => 'ResourceRelationList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceRelationList)) {
            Model::validateArray($this->resourceRelationList);
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

        if (null !== $this->resourceRelationList) {
            if (\is_array($this->resourceRelationList)) {
                $res['ResourceRelationList'] = [];
                $n1                          = 0;
                foreach ($this->resourceRelationList as $item1) {
                    $res['ResourceRelationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceRelationList'])) {
            if (!empty($map['ResourceRelationList'])) {
                $model->resourceRelationList = [];
                $n1                          = 0;
                foreach ($map['ResourceRelationList'] as $item1) {
                    $model->resourceRelationList[$n1++] = resourceRelationList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
