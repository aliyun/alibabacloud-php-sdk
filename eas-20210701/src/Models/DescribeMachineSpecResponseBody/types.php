<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody;

use AlibabaCloud\Tea\Model;

class types extends Model
{
    /**
     * @description Valid values:
     *
     * @example 1
     *
     * @var int
     */
    public $CPU;

    /**
     * @description The optional values for memory when CPU is set to a specific value as above.
     *
     * @var int[]
     */
    public $memory;
    protected $_name = [
        'CPU' => 'CPU',
        'memory' => 'Memory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return types
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['Memory'])) {
            if (!empty($map['Memory'])) {
                $model->memory = $map['Memory'];
            }
        }

        return $model;
    }
}
