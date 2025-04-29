<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module;

use AlibabaCloud\Dara\Model;

class itemInvoice extends Model
{
    /**
     * @var bool
     */
    public $supportSpecial;
    protected $_name = [
        'supportSpecial' => 'support_special',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportSpecial) {
            $res['support_special'] = $this->supportSpecial;
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
        if (isset($map['support_special'])) {
            $model->supportSpecial = $map['support_special'];
        }

        return $model;
    }
}
