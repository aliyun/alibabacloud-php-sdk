<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result\results;

use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result\results\details\contexts;
use AlibabaCloud\Tea\Model;

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
        'label'    => 'Label',
        'contexts' => 'contexts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->contexts) {
            $res['contexts'] = [];
            if (null !== $this->contexts && \is_array($this->contexts)) {
                $n = 0;
                foreach ($this->contexts as $item) {
                    $res['contexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['contexts'])) {
            if (!empty($map['contexts'])) {
                $model->contexts = [];
                $n               = 0;
                foreach ($map['contexts'] as $item) {
                    $model->contexts[$n++] = null !== $item ? contexts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
