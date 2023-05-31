<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion;

use AlibabaCloud\Tea\Model;

class lesionList extends Model
{
    /**
     * @var float[]
     */
    public $diameter;

    /**
     * @example 100
     *
     * @var int
     */
    public $keySlice;

    /**
     * @example 0.9375
     *
     * @var float
     */
    public $malignancy;

    /**
     * @var float[]
     */
    public $recistEndpoints;

    /**
     * @example HCC
     *
     * @var string
     */
    public $type;

    /**
     * @example 305.3661
     *
     * @var float
     */
    public $volume;
    protected $_name = [
        'diameter'        => 'Diameter',
        'keySlice'        => 'KeySlice',
        'malignancy'      => 'Malignancy',
        'recistEndpoints' => 'RecistEndpoints',
        'type'            => 'Type',
        'volume'          => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diameter) {
            $res['Diameter'] = $this->diameter;
        }
        if (null !== $this->keySlice) {
            $res['KeySlice'] = $this->keySlice;
        }
        if (null !== $this->malignancy) {
            $res['Malignancy'] = $this->malignancy;
        }
        if (null !== $this->recistEndpoints) {
            $res['RecistEndpoints'] = $this->recistEndpoints;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lesionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Diameter'])) {
            if (!empty($map['Diameter'])) {
                $model->diameter = $map['Diameter'];
            }
        }
        if (isset($map['KeySlice'])) {
            $model->keySlice = $map['KeySlice'];
        }
        if (isset($map['Malignancy'])) {
            $model->malignancy = $map['Malignancy'];
        }
        if (isset($map['RecistEndpoints'])) {
            if (!empty($map['RecistEndpoints'])) {
                $model->recistEndpoints = $map['RecistEndpoints'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
