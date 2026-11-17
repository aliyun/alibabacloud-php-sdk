<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeObjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeObjectsResponseBody\data\objects;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var objects[]
     */
    public $objects;
    protected $_name = [
        'nextToken' => 'NextToken',
        'objects' => 'Objects',
    ];

    public function validate()
    {
        if (\is_array($this->objects)) {
            Model::validateArray($this->objects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->objects) {
            if (\is_array($this->objects)) {
                $res['Objects'] = [];
                $n1 = 0;
                foreach ($this->objects as $item1) {
                    $res['Objects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Objects'])) {
            if (!empty($map['Objects'])) {
                $model->objects = [];
                $n1 = 0;
                foreach ($map['Objects'] as $item1) {
                    $model->objects[$n1] = objects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
