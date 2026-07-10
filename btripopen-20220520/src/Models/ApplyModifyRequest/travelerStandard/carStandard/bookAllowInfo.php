<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard;

use AlibabaCloud\Dara\Model;

class bookAllowInfo extends Model
{
    /**
     * @var bool
     */
    public $bookAllow;
    protected $_name = [
        'bookAllow' => 'book_allow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookAllow) {
            $res['book_allow'] = $this->bookAllow;
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
        if (isset($map['book_allow'])) {
            $model->bookAllow = $map['book_allow'];
        }

        return $model;
    }
}
