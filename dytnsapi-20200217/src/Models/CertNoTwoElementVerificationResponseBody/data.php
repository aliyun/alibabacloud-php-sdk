<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CertNoTwoElementVerificationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $isConsistent;
    protected $_name = [
        'isConsistent' => 'IsConsistent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isConsistent) {
            $res['IsConsistent'] = $this->isConsistent;
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
        if (isset($map['IsConsistent'])) {
            $model->isConsistent = $map['IsConsistent'];
        }

        return $model;
    }
}
