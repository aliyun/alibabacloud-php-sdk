<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyChargeTypePriceResponseBody\data;

use AlibabaCloud\Dara\Model;

class moduleInstance extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $standPrice;

    /**
     * @var string
     */
    public $totalProductFee;
    protected $_name = [
        'moduleCode' => 'ModuleCode',
        'moduleName' => 'ModuleName',
        'standPrice' => 'StandPrice',
        'totalProductFee' => 'TotalProductFee',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->standPrice) {
            $res['StandPrice'] = $this->standPrice;
        }

        if (null !== $this->totalProductFee) {
            $res['TotalProductFee'] = $this->totalProductFee;
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
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }

        if (isset($map['TotalProductFee'])) {
            $model->totalProductFee = $map['TotalProductFee'];
        }

        return $model;
    }
}
