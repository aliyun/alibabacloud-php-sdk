<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables\variable;
use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @var variable[]
     */
    public $variable;
    protected $_name = [
        'variable' => 'Variable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->variable) {
            $res['Variable'] = [];
            if (null !== $this->variable && \is_array($this->variable)) {
                $n = 0;
                foreach ($this->variable as $item) {
                    $res['Variable'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Variable'])) {
            if (!empty($map['Variable'])) {
                $model->variable = [];
                $n               = 0;
                foreach ($map['Variable'] as $item) {
                    $model->variable[$n++] = null !== $item ? variable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
