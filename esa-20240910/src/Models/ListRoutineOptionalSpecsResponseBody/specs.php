<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineOptionalSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class specs extends Model
{
    /**
     * @description Indicates whether the specification is available. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isAvailable;

    /**
     * @description The specification name.
     *
     * @example 5ms
     *
     * @var string
     */
    public $specName;
    protected $_name = [
        'isAvailable' => 'IsAvailable',
        'specName' => 'SpecName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}
