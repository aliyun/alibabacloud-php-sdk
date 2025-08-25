<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponseBody\data\elements\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponseBody\data\elements\results\details\contexts;

class details extends Model
{
    /**
     * @var contexts[]
     */
    public $contexts;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'contexts' => 'Contexts',
        'label' => 'Label',
    ];

    public function validate()
    {
        if (\is_array($this->contexts)) {
            Model::validateArray($this->contexts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contexts) {
            if (\is_array($this->contexts)) {
                $res['Contexts'] = [];
                $n1 = 0;
                foreach ($this->contexts as $item1) {
                    $res['Contexts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['Contexts'])) {
            if (!empty($map['Contexts'])) {
                $model->contexts = [];
                $n1 = 0;
                foreach ($map['Contexts'] as $item1) {
                    $model->contexts[$n1] = contexts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
