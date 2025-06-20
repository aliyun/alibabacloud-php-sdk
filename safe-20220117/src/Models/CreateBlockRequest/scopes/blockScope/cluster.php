<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\cluster\relations;

class cluster extends Model
{
    /**
     * @var string[]
     */
    public $codeNames;

    /**
     * @var relations[]
     */
    public $relations;
    protected $_name = [
        'codeNames' => 'CodeNames',
        'relations' => 'Relations',
    ];

    public function validate()
    {
        if (\is_array($this->codeNames)) {
            Model::validateArray($this->codeNames);
        }
        if (\is_array($this->relations)) {
            Model::validateArray($this->relations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeNames) {
            if (\is_array($this->codeNames)) {
                $res['CodeNames'] = [];
                $n1 = 0;
                foreach ($this->codeNames as $item1) {
                    $res['CodeNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relations) {
            if (\is_array($this->relations)) {
                $res['Relations'] = [];
                $n1 = 0;
                foreach ($this->relations as $item1) {
                    $res['Relations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CodeNames'])) {
            if (!empty($map['CodeNames'])) {
                $model->codeNames = [];
                $n1 = 0;
                foreach ($map['CodeNames'] as $item1) {
                    $model->codeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Relations'])) {
            if (!empty($map['Relations'])) {
                $model->relations = [];
                $n1 = 0;
                foreach ($map['Relations'] as $item1) {
                    $model->relations[$n1] = relations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
