<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaCollectionsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\Collection;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The collections.
     *
     * @var Collection[]
     */
    public $collectionList;

    /**
     * @description The token that is used for the next query.
     *
     * @example 37ae2053d87d380f28ce0dc0853ca51e
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'collectionList' => 'CollectionList',
        'nextToken'      => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionList) {
            $res['CollectionList'] = [];
            if (null !== $this->collectionList && \is_array($this->collectionList)) {
                $n = 0;
                foreach ($this->collectionList as $item) {
                    $res['CollectionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionList'])) {
            if (!empty($map['CollectionList'])) {
                $model->collectionList = [];
                $n                     = 0;
                foreach ($map['CollectionList'] as $item) {
                    $model->collectionList[$n++] = null !== $item ? Collection::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
