<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaCollectionEntitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\Entity;

class data extends Model
{
    /**
     * @var Entity[]
     */
    public $entityList;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'entityList' => 'EntityList',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->entityList)) {
            Model::validateArray($this->entityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityList) {
            if (\is_array($this->entityList)) {
                $res['EntityList'] = [];
                $n1 = 0;
                foreach ($this->entityList as $item1) {
                    $res['EntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EntityList'])) {
            if (!empty($map['EntityList'])) {
                $model->entityList = [];
                $n1 = 0;
                foreach ($map['EntityList'] as $item1) {
                    $model->entityList[$n1] = Entity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
