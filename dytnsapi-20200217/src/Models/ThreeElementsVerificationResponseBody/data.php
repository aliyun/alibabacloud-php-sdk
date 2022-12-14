<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\ThreeElementsVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $basicCarrier;

    /**
     * @example 1
     *
     * @var int
     */
    public $isConsistent;
    protected $_name = [
        'basicCarrier' => 'BasicCarrier',
        'isConsistent' => 'IsConsistent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicCarrier) {
            $res['BasicCarrier'] = $this->basicCarrier;
        }
        if (null !== $this->isConsistent) {
            $res['IsConsistent'] = $this->isConsistent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicCarrier'])) {
            $model->basicCarrier = $map['BasicCarrier'];
        }
        if (isset($map['IsConsistent'])) {
            $model->isConsistent = $map['IsConsistent'];
        }

        return $model;
    }
}
