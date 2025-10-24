<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result\results\details\contexts;

class details extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var contexts[]
     */
    public $contexts;
    protected $_name = [
        'label' => 'Label',
        'contexts' => 'contexts',
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
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->contexts) {
            if (\is_array($this->contexts)) {
                $res['contexts'] = [];
                $n1 = 0;
                foreach ($this->contexts as $item1) {
                    $res['contexts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['contexts'])) {
            if (!empty($map['contexts'])) {
                $model->contexts = [];
                $n1 = 0;
                foreach ($map['contexts'] as $item1) {
                    $model->contexts[$n1] = contexts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
