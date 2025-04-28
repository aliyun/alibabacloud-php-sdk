<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceResponseBody;

use AlibabaCloud\Dara\Model;

class computeResource extends Model
{
    /**
     * @var string
     */
    public $displayValue;

    /**
     * @var string
     */
    public $realValue;
    protected $_name = [
        'displayValue' => 'DisplayValue',
        'realValue' => 'RealValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
