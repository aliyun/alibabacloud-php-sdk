<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetCarbonEmissionTrendRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * This parameter is required.
     * @example C-20240119-1
     *
     * @var string
     */
    public $code;

    /**
     * @description Module code.
     *
     * @example carbonInventory.check.scope_1_direct_ghg_emissions
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description Module type.
     *
     * @example 3
     *
     * @var int
     */
    public $moduleType;

    /**
     * @description Trend Type.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $trendType;

    /**
     * @description The list of inventory year.
     *
     * This parameter is required.
     * @var int[]
     */
    public $yearList;
    protected $_name = [
        'code'       => 'code',
        'moduleCode' => 'moduleCode',
        'moduleType' => 'moduleType',
        'trendType'  => 'trendType',
        'yearList'   => 'yearList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->moduleCode) {
            $res['moduleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleType) {
            $res['moduleType'] = $this->moduleType;
        }
        if (null !== $this->trendType) {
            $res['trendType'] = $this->trendType;
        }
        if (null !== $this->yearList) {
            $res['yearList'] = $this->yearList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCarbonEmissionTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['moduleCode'])) {
            $model->moduleCode = $map['moduleCode'];
        }
        if (isset($map['moduleType'])) {
            $model->moduleType = $map['moduleType'];
        }
        if (isset($map['trendType'])) {
            $model->trendType = $map['trendType'];
        }
        if (isset($map['yearList'])) {
            if (!empty($map['yearList'])) {
                $model->yearList = $map['yearList'];
            }
        }

        return $model;
    }
}
