<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetOrgConstituteRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * @example Z-20240115-2
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
     * @description Year.
     *
     * @example 2024
     *
     * @var int
     */
    public $year;
    protected $_name = [
        'code'       => 'code',
        'moduleCode' => 'moduleCode',
        'moduleType' => 'moduleType',
        'year'       => 'year',
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
        if (null !== $this->year) {
            $res['year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrgConstituteRequest
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
        if (isset($map['year'])) {
            $model->year = $map['year'];
        }

        return $model;
    }
}
