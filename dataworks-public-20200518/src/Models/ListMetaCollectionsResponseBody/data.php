<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaCollectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\Collection;

class data extends Model
{
    /**
     * @var Collection[]
     */
    public $collectionList;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'collectionList' => 'CollectionList',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->collectionList)) {
            Model::validateArray($this->collectionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionList) {
            if (\is_array($this->collectionList)) {
                $res['CollectionList'] = [];
                $n1 = 0;
                foreach ($this->collectionList as $item1) {
                    $res['CollectionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['CollectionList'])) {
            if (!empty($map['CollectionList'])) {
                $model->collectionList = [];
                $n1 = 0;
                foreach ($map['CollectionList'] as $item1) {
                    $model->collectionList[$n1++] = Collection::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
