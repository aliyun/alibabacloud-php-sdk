<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig;

use AlibabaCloud\Tea\Model;

class reservedMemory extends Model
{
    /**
     * @var mixed[]
     */
    public $limits;

    /**
     * @var int
     */
    public $numaNode;
    protected $_name = [
        'limits'   => 'limits',
        'numaNode' => 'numaNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limits) {
            $res['limits'] = $this->limits;
        }
        if (null !== $this->numaNode) {
            $res['numaNode'] = $this->numaNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedMemory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limits'])) {
            $model->limits = $map['limits'];
        }
        if (isset($map['numaNode'])) {
            $model->numaNode = $map['numaNode'];
        }

        return $model;
    }
}
