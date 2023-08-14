<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCancelOrderV2ResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2023-08-10 17:45:32
     *
     * @var string
     */
    public $cancelTime;
    protected $_name = [
        'cancelTime' => 'cancel_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelTime) {
            $res['cancel_time'] = $this->cancelTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cancel_time'])) {
            $model->cancelTime = $map['cancel_time'];
        }

        return $model;
    }
}
