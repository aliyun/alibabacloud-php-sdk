<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaCollectionEntitiesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\Entity;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var Entity[]
     */
    public $entityList;

    /**
     * @example 123344
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'entityList' => 'EntityList',
        'nextToken'  => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityList) {
            $res['EntityList'] = [];
            if (null !== $this->entityList && \is_array($this->entityList)) {
                $n = 0;
                foreach ($this->entityList as $item) {
                    $res['EntityList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['EntityList'])) {
            if (!empty($map['EntityList'])) {
                $model->entityList = [];
                $n                 = 0;
                foreach ($map['EntityList'] as $item) {
                    $model->entityList[$n++] = null !== $item ? Entity::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
