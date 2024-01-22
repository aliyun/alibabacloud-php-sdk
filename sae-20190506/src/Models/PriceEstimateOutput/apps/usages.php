<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\apps;

use AlibabaCloud\Tea\Model;

class usages extends Model
{
    /**
     * @example 3600.00
     *
     * @var float
     */
    public $amount;

    /**
     * @example Microservice_cpuUsage
     *
     * @var string
     */
    public $id;

    /**
     * @example 核*秒
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'amount' => 'Amount',
        'id'     => 'Id',
        'unit'   => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
