<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody\affinity\CPU;
use AlibabaCloud\Tea\Model;

class affinity extends Model
{
    /**
     * @var CPU
     */
    public $CPU;
    protected $_name = [
        'CPU' => 'CPU',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = null !== $this->CPU ? $this->CPU->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return affinity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = CPU::fromMap($map['CPU']);
        }

        return $model;
    }
}
