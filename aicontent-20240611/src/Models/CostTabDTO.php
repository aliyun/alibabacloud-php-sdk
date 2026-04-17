<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class CostTabDTO extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $modelTypes;
    protected $_name = [
        'key' => 'key',
        'label' => 'label',
        'modelTypes' => 'modelTypes',
    ];

    public function validate()
    {
        if (\is_array($this->modelTypes)) {
            Model::validateArray($this->modelTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->modelTypes) {
            if (\is_array($this->modelTypes)) {
                $res['modelTypes'] = [];
                $n1 = 0;
                foreach ($this->modelTypes as $item1) {
                    $res['modelTypes'][$n1] = $item1;
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
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['modelTypes'])) {
            if (!empty($map['modelTypes'])) {
                $model->modelTypes = [];
                $n1 = 0;
                foreach ($map['modelTypes'] as $item1) {
                    $model->modelTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
