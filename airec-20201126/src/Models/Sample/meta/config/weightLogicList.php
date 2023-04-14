<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\config;

use AlibabaCloud\Tea\Model;

class weightLogicList extends Model
{
    /**
     * @example click
     *
     * @var string
     */
    public $bhv;

    /**
     * @example 1.01
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'bhv'    => 'Bhv',
        'weight' => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bhv) {
            $res['Bhv'] = $this->bhv;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weightLogicList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bhv'])) {
            $model->bhv = $map['Bhv'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
