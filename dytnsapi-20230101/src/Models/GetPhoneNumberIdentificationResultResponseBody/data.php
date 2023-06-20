<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $isIdentified;
    protected $_name = [
        'isIdentified' => 'IsIdentified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isIdentified) {
            $res['IsIdentified'] = $this->isIdentified;
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
        if (isset($map['IsIdentified'])) {
            $model->isIdentified = $map['IsIdentified'];
        }

        return $model;
    }
}
