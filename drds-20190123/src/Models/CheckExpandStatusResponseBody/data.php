<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CheckExpandStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var bool
     */
    public $isActive;
    protected $_name = [
        'msg'      => 'Msg',
        'isActive' => 'IsActive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
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
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }

        return $model;
    }
}
