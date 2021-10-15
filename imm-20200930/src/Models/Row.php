<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Row extends Model
{
    /**
     * @description CustomLabels
     *
     * @var KeyValuePair[]
     */
    public $customLabels;

    /**
     * @description URI
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'customLabels' => 'CustomLabels',
        'URI'          => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = [];
            if (null !== $this->customLabels && \is_array($this->customLabels)) {
                $n = 0;
                foreach ($this->customLabels as $item) {
                    $res['CustomLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Row
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                $n                   = 0;
                foreach ($map['CustomLabels'] as $item) {
                    $model->customLabels[$n++] = null !== $item ? KeyValuePair::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
