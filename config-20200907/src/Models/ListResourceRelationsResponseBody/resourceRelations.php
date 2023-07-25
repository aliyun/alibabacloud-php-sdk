<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListResourceRelationsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceRelationsResponseBody\resourceRelations\resourceRelationList;
use AlibabaCloud\Tea\Model;

class resourceRelations extends Model
{
    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example C2DjqMYSy0is7zSMGf21****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description An array that contains the relationships.
     *
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
        if (null !== $this->resourceRelationList) {
            $res['ResourceRelationList'] = [];
            if (null !== $this->resourceRelationList && \is_array($this->resourceRelationList)) {
                $n = 0;
                foreach ($this->resourceRelationList as $item) {
                    $res['ResourceRelationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceRelations
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
        if (isset($map['ResourceRelationList'])) {
            if (!empty($map['ResourceRelationList'])) {
                $model->resourceRelationList = [];
                $n                           = 0;
                foreach ($map['ResourceRelationList'] as $item) {
                    $model->resourceRelationList[$n++] = null !== $item ? resourceRelationList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
