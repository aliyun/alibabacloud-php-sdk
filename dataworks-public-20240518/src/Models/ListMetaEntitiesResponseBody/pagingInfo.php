<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMetaEntitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MetaEntity;

class pagingInfo extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var MetaEntity[]
     */
    public $metaEntities;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'metaEntities' => 'MetaEntities',
        'nextToken' => 'NextToken',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->metaEntities)) {
            Model::validateArray($this->metaEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->metaEntities) {
            if (\is_array($this->metaEntities)) {
                $res['MetaEntities'] = [];
                $n1 = 0;
                foreach ($this->metaEntities as $item1) {
                    $res['MetaEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['MetaEntities'])) {
            if (!empty($map['MetaEntities'])) {
                $model->metaEntities = [];
                $n1 = 0;
                foreach ($map['MetaEntities'] as $item1) {
                    $model->metaEntities[$n1] = MetaEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
