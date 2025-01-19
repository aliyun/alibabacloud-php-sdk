<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\GetUAIDApplyTokenSignResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $carrier;
    /**
     * @var string
     */
    public $outId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
