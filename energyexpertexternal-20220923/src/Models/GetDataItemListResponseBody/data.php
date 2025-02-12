<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataItemListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'code'   => 'code',
        'name'   => 'name',
        'period' => 'period',
        'unit'   => 'unit',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
