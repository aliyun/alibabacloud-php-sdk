<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponseBody\data\elements\results;

use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponseBody\data\elements\results\details\contexts;
use AlibabaCloud\Tea\Model;

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
        'label'    => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contexts) {
            $res['Contexts'] = [];
            if (null !== $this->contexts && \is_array($this->contexts)) {
                $n = 0;
                foreach ($this->contexts as $item) {
                    $res['Contexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['Contexts'])) {
            if (!empty($map['Contexts'])) {
                $model->contexts = [];
                $n               = 0;
                foreach ($map['Contexts'] as $item) {
                    $model->contexts[$n++] = null !== $item ? contexts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
