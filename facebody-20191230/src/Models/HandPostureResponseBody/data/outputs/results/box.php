<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\box\positions;
use AlibabaCloud\Tea\Model;

class box extends Model
{
    /**
     * @var positions[]
     */
    public $positions;

    /**
     * @var float
     */
    public $confident;
    protected $_name = [
        'positions' => 'Positions',
        'confident' => 'Confident',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->positions) {
            $res['Positions'] = [];
            if (null !== $this->positions && \is_array($this->positions)) {
                $n = 0;
                foreach ($this->positions as $item) {
                    $res['Positions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->confident) {
            $res['Confident'] = $this->confident;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return box
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Positions'])) {
            if (!empty($map['Positions'])) {
                $model->positions = [];
                $n                = 0;
                foreach ($map['Positions'] as $item) {
                    $model->positions[$n++] = null !== $item ? positions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Confident'])) {
            $model->confident = $map['Confident'];
        }

        return $model;
    }
}
