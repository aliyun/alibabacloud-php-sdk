<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest;

use AlibabaCloud\Tea\Model;

class hotelShare extends Model
{
    /**
     * @example 70
     *
     * @var string
     */
    public $param;

    /**
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'param' => 'param',
        'type'  => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return hotelShare
     */
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
