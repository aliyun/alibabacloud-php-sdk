<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDConversionResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $phoneList;
    protected $_name = [
        'phoneList' => 'PhoneList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phoneList) {
            $res['PhoneList'] = $this->phoneList;
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
        if (isset($map['PhoneList'])) {
            $model->phoneList = $map['PhoneList'];
        }

        return $model;
    }
}
