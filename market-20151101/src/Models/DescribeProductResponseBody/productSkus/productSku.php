<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\modules;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\orderPeriods;
use AlibabaCloud\Tea\Model;

class productSku extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $constraints;

    /**
     * @var bool
     */
    public $hidden;

    /**
     * @var modules
     */
    public $modules;

    /**
     * @var string
     */
    public $name;

    /**
     * @var orderPeriods
     */
    public $orderPeriods;
    protected $_name = [
        'chargeType'   => 'ChargeType',
        'code'         => 'Code',
        'constraints'  => 'Constraints',
        'hidden'       => 'Hidden',
        'modules'      => 'Modules',
        'name'         => 'Name',
        'orderPeriods' => 'OrderPeriods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->constraints) {
            $res['Constraints'] = $this->constraints;
        }
        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }
        if (null !== $this->modules) {
            $res['Modules'] = null !== $this->modules ? $this->modules->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderPeriods) {
            $res['OrderPeriods'] = null !== $this->orderPeriods ? $this->orderPeriods->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productSku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Constraints'])) {
            $model->constraints = $map['Constraints'];
        }
        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }
        if (isset($map['Modules'])) {
            $model->modules = modules::fromMap($map['Modules']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderPeriods'])) {
            $model->orderPeriods = orderPeriods::fromMap($map['OrderPeriods']);
        }

        return $model;
    }
}
