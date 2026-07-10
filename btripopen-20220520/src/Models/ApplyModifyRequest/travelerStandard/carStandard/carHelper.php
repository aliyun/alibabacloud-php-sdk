<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard;

use AlibabaCloud\Dara\Model;

class carHelper extends Model
{
    /**
     * @var string
     */
    public $carHelperType;
    protected $_name = [
        'carHelperType' => 'car_helper_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->carHelperType) {
            $res['car_helper_type'] = $this->carHelperType;
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
        if (isset($map['car_helper_type'])) {
            $model->carHelperType = $map['car_helper_type'];
        }

        return $model;
    }
}
