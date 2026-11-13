<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph\edges;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph\edges\join\joinKeys;

class join extends Model
{
    /**
     * @var string
     */
    public $cardinality;

    /**
     * @var joinKeys[]
     */
    public $joinKeys;
    protected $_name = [
        'cardinality' => 'Cardinality',
        'joinKeys' => 'JoinKeys',
    ];

    public function validate()
    {
        if (\is_array($this->joinKeys)) {
            Model::validateArray($this->joinKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardinality) {
            $res['Cardinality'] = $this->cardinality;
        }

        if (null !== $this->joinKeys) {
            if (\is_array($this->joinKeys)) {
                $res['JoinKeys'] = [];
                $n1 = 0;
                foreach ($this->joinKeys as $item1) {
                    $res['JoinKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Cardinality'])) {
            $model->cardinality = $map['Cardinality'];
        }

        if (isset($map['JoinKeys'])) {
            if (!empty($map['JoinKeys'])) {
                $model->joinKeys = [];
                $n1 = 0;
                foreach ($map['JoinKeys'] as $item1) {
                    $model->joinKeys[$n1] = joinKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
