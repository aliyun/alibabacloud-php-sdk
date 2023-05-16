<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems\saleControlItem\basicSaleControl;

use AlibabaCloud\Tea\Model;

class moduleValue extends Model
{
    /**
     * @var string
     */
    public $moduleMaxValue;

    /**
     * @var string
     */
    public $moduleMinValue;

    /**
     * @var string[]
     */
    public $moduleValue;
    protected $_name = [
        'moduleMaxValue' => 'ModuleMaxValue',
        'moduleMinValue' => 'ModuleMinValue',
        'moduleValue'    => 'ModuleValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleMaxValue) {
            $res['ModuleMaxValue'] = $this->moduleMaxValue;
        }
        if (null !== $this->moduleMinValue) {
            $res['ModuleMinValue'] = $this->moduleMinValue;
        }
        if (null !== $this->moduleValue) {
            $res['ModuleValue'] = $this->moduleValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleMaxValue'])) {
            $model->moduleMaxValue = $map['ModuleMaxValue'];
        }
        if (isset($map['ModuleMinValue'])) {
            $model->moduleMinValue = $map['ModuleMinValue'];
        }
        if (isset($map['ModuleValue'])) {
            if (!empty($map['ModuleValue'])) {
                $model->moduleValue = $map['ModuleValue'];
            }
        }

        return $model;
    }
}
