<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\GetUAIDConversionSignResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $carrier;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $outId;

    /**
     * @example 示例值
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
