<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceResponseBody;

use AlibabaCloud\Tea\Model;

class computeResource extends Model
{
    /**
     * @description The specifications of computing resources displayed in the console.
     *
     * @example 8 Core 32 GB（单机版）
     *
     * @var string
     */
    public $displayValue;

    /**
     * @description The actual specifications of computing resources.
     *
     * @example 8 Core 32 GB
     *
     * @var string
     */
    public $realValue;
    protected $_name = [
        'displayValue' => 'DisplayValue',
        'realValue'    => 'RealValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayValue) {
            $res['DisplayValue'] = $this->displayValue;
        }
        if (null !== $this->realValue) {
            $res['RealValue'] = $this->realValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayValue'])) {
            $model->displayValue = $map['DisplayValue'];
        }
        if (isset($map['RealValue'])) {
            $model->realValue = $map['RealValue'];
        }

        return $model;
    }
}
