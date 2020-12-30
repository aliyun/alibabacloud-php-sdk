<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoResponseBody\module;

use AlibabaCloud\Tea\Model;

class phoneNoAInfo extends Model
{
    /**
     * @var string
     */
    public $phoneNoX;

    /**
     * @var string
     */
    public $phoneNoA;
    protected $_name = [
        'phoneNoX' => 'PhoneNoX',
        'phoneNoA' => 'PhoneNoA',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phoneNoAInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }

        return $model;
    }
}
