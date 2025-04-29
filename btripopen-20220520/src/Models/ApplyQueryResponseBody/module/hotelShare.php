<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class hotelShare extends Model
{
    /**
     * @var string
     */
    public $param;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'param' => 'param',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->param) {
            $res['param'] = $this->param;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['param'])) {
            $model->param = $map['param'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
