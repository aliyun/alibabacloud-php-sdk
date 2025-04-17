<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\servers;

use AlibabaCloud\Dara\Model;

class reason extends Model
{
    /**
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'reasonCode' => 'ReasonCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
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
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        return $model;
    }
}
