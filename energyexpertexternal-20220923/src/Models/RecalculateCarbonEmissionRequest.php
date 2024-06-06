<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class RecalculateCarbonEmissionRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * This parameter is required.
     * @example C-20240202-01
     *
     * @var string
     */
    public $code;

    /**
     * @description Year of inventory.
     *
     * This parameter is required.
     * @example 2024
     *
     * @var string
     */
    public $year;
    protected $_name = [
        'code' => 'code',
        'year' => 'year',
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
        if (null !== $this->year) {
            $res['year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecalculateCarbonEmissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['year'])) {
            $model->year = $map['year'];
        }

        return $model;
    }
}
