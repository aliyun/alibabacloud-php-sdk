<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets;

use AlibabaCloud\Tea\Model;

class declared extends Model
{
    /**
     * @var string
     */
    public $declared;

    /**
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
