<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDVerificationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $uaid;
    protected $_name = [
        'uaid' => 'Uaid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uaid) {
            $res['Uaid'] = $this->uaid;
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
        if (isset($map['Uaid'])) {
            $model->uaid = $map['Uaid'];
        }

        return $model;
    }
}
