<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CheckExpandStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether scale-out operations can be performed on the database.
     *
     * @example true
     *
     * @var bool
     */
    public $isActive;

    /**
     * @description The additional information.
     *
     * @example success
     *
     * @var string
     */
    public $msg;
    protected $_name = [
        'isActive' => 'IsActive',
        'msg'      => 'Msg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
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
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        return $model;
    }
}
