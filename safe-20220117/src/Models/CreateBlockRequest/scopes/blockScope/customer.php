<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\customer\relations;

class customer extends Model
{
    /**
     * @var string[]
     */
    public $codeNames;

    /**
     * @var relations[]
     */
    public $relations;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int[]
     */
    public $viewCodes;
    protected $_name = [
        'codeNames' => 'CodeNames',
        'relations' => 'Relations',
        'uid' => 'Uid',
        'viewCodes' => 'ViewCodes',
    ];

    public function validate()
    {
        if (\is_array($this->codeNames)) {
            Model::validateArray($this->codeNames);
        }
        if (\is_array($this->relations)) {
            Model::validateArray($this->relations);
        }
        if (\is_array($this->viewCodes)) {
            Model::validateArray($this->viewCodes);
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

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->viewCodes) {
            if (\is_array($this->viewCodes)) {
                $res['ViewCodes'] = [];
                $n1 = 0;
                foreach ($this->viewCodes as $item1) {
                    $res['ViewCodes'][$n1] = $item1;
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

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['ViewCodes'])) {
            if (!empty($map['ViewCodes'])) {
                $model->viewCodes = [];
                $n1 = 0;
                foreach ($map['ViewCodes'] as $item1) {
                    $model->viewCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
