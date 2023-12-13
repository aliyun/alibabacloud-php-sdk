<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\GetUAIDApplyTokenSignResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example CM
     *
     * @var string
     */
    public $carrier;

    /**
     * @example b8b5b3a*******0b9893484fdf412c99
     *
     * @var string
     */
    public $outId;

    /**
     * @example D2E204D74EEB373E468632********23F592C4C9
     *
     * @var string
     */
    public $sign;
    protected $_name = [
        'carrier' => 'Carrier',
        'outId'   => 'OutId',
        'sign'    => 'Sign',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
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
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }

        return $model;
    }
}
