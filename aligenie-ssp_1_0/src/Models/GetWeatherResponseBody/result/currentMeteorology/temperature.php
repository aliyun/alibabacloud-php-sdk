<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result\currentMeteorology;

use AlibabaCloud\Tea\Model;

class temperature extends Model
{
    /**
     * @var string
     */
    public $current;

    /**
     * @var string
     */
    public $currentDesc;

    /**
     * @var string
     */
    public $high;

    /**
     * @var string
     */
    public $highDesc;

    /**
     * @var string
     */
    public $logical;

    /**
     * @var string
     */
    public $low;

    /**
     * @var string
     */
    public $lowDesc;
    protected $_name = [
        'current'     => 'Current',
        'currentDesc' => 'CurrentDesc',
        'high'        => 'High',
        'highDesc'    => 'HighDesc',
        'logical'     => 'Logical',
        'low'         => 'Low',
        'lowDesc'     => 'LowDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->currentDesc) {
            $res['CurrentDesc'] = $this->currentDesc;
        }
        if (null !== $this->high) {
            $res['High'] = $this->high;
        }
        if (null !== $this->highDesc) {
            $res['HighDesc'] = $this->highDesc;
        }
        if (null !== $this->logical) {
            $res['Logical'] = $this->logical;
        }
        if (null !== $this->low) {
            $res['Low'] = $this->low;
        }
        if (null !== $this->lowDesc) {
            $res['LowDesc'] = $this->lowDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return temperature
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['CurrentDesc'])) {
            $model->currentDesc = $map['CurrentDesc'];
        }
        if (isset($map['High'])) {
            $model->high = $map['High'];
        }
        if (isset($map['HighDesc'])) {
            $model->highDesc = $map['HighDesc'];
        }
        if (isset($map['Logical'])) {
            $model->logical = $map['Logical'];
        }
        if (isset($map['Low'])) {
            $model->low = $map['Low'];
        }
        if (isset($map['LowDesc'])) {
            $model->lowDesc = $map['LowDesc'];
        }

        return $model;
    }
}
