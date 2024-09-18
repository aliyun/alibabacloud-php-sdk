<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets;

use AlibabaCloud\Tea\Model;

class declared extends Model
{
    /**
     * @description Indicates whether the CIDR block is advertised. Valid values:
     *
     * - 1: The CIDR block is advertised.
     * @example 0
     *
     * @var string
     */
    public $declared;

    /**
     * @description The region in which the CIDR block is advertised.
     *
     * @example oe26
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'declared' => 'Declared',
        'region'   => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->declared) {
            $res['Declared'] = $this->declared;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return declared
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Declared'])) {
            $model->declared = $map['Declared'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
