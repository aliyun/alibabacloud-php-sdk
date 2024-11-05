<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoThreeElementVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $isConsistent;
    protected $_name = [
        'isConsistent' => 'IsConsistent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['IsConsistent'])) {
            $model->isConsistent = $map['IsConsistent'];
        }

        return $model;
    }
}
