<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ModelSelectionDelta extends Model
{
    /**
     * @var string[]
     */
    public $addModelCardIds;

    /**
     * @var string[]
     */
    public $removeModelCardIds;
    protected $_name = [
        'addModelCardIds' => 'addModelCardIds',
        'removeModelCardIds' => 'removeModelCardIds',
    ];

    public function validate()
    {
        if (\is_array($this->addModelCardIds)) {
            Model::validateArray($this->addModelCardIds);
        }
        if (\is_array($this->removeModelCardIds)) {
            Model::validateArray($this->removeModelCardIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addModelCardIds) {
            if (\is_array($this->addModelCardIds)) {
                $res['addModelCardIds'] = [];
                $n1 = 0;
                foreach ($this->addModelCardIds as $item1) {
                    $res['addModelCardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->removeModelCardIds) {
            if (\is_array($this->removeModelCardIds)) {
                $res['removeModelCardIds'] = [];
                $n1 = 0;
                foreach ($this->removeModelCardIds as $item1) {
                    $res['removeModelCardIds'][$n1] = $item1;
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
        if (isset($map['addModelCardIds'])) {
            if (!empty($map['addModelCardIds'])) {
                $model->addModelCardIds = [];
                $n1 = 0;
                foreach ($map['addModelCardIds'] as $item1) {
                    $model->addModelCardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['removeModelCardIds'])) {
            if (!empty($map['removeModelCardIds'])) {
                $model->removeModelCardIds = [];
                $n1 = 0;
                foreach ($map['removeModelCardIds'] as $item1) {
                    $model->removeModelCardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
