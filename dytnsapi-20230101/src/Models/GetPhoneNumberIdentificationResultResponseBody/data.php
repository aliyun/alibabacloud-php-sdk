<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $isIdentified;
    protected $_name = [
        'isIdentified' => 'IsIdentified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isIdentified) {
            $res['IsIdentified'] = $this->isIdentified;
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
        if (isset($map['IsIdentified'])) {
            $model->isIdentified = $map['IsIdentified'];
        }

        return $model;
    }
}
