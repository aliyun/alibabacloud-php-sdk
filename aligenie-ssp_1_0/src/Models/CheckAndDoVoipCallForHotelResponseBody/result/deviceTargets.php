<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelResponseBody\result\deviceTargets\data;
use AlibabaCloud\Tea\Model;

class deviceTargets extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $msg;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'msg'  => 'Msg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        return $model;
    }
}
