<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GetOrgConstituteRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var int
     */
    public $moduleType;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'code' => 'code',
        'moduleCode' => 'moduleCode',
        'moduleType' => 'moduleType',
        'year' => 'year',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
