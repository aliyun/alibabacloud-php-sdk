<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryPhoneNoAByTrackNoResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @description The extension of phone number X.
     *
     * @example 130
     *
     * @var string
     */
    public $extension;

    /**
     * @description Phone number A.
     *
     * @example 1310000****
     *
     * @var string
     */
    public $phoneNoA;

    /**
     * @description The private number, that is, phone number X.
     *
     * @example 1710000****
     *
     * @var string
     */
    public $phoneNoX;
    protected $_name = [
        'extension' => 'Extension',
        'phoneNoA'  => 'PhoneNoA',
        'phoneNoX'  => 'PhoneNoX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }

        return $model;
    }
}
