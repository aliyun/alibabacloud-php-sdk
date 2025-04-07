<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\taxi;

use AlibabaCloud\Dara\Model;

class polyline extends Model
{
    /**
     * @var string
     */
    public $polyline;
    protected $_name = [
        'polyline' => 'polyline',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polyline) {
            $res['polyline'] = $this->polyline;
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
        if (isset($map['polyline'])) {
            $model->polyline = $map['polyline'];
        }

        return $model;
    }
}
