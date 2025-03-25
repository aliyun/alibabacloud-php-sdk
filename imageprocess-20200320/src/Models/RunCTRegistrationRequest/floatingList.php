<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest;

use AlibabaCloud\Dara\Model;

class floatingList extends Model
{
    /**
     * @var string
     */
    public $floatingURL;
    protected $_name = [
        'floatingURL' => 'FloatingURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->floatingURL) {
            $res['FloatingURL'] = $this->floatingURL;
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
        if (isset($map['FloatingURL'])) {
            $model->floatingURL = $map['FloatingURL'];
        }

        return $model;
    }
}
