<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineOptionalSpecsResponseBody;

use AlibabaCloud\Dara\Model;

class specs extends Model
{
    /**
     * @var bool
     */
    public $isAvailable;
    /**
     * @var string
     */
    public $specName;
    protected $_name = [
        'isAvailable' => 'IsAvailable',
        'specName'    => 'SpecName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
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
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}
