<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeEIURangeResponseBody\EIUInfo;

class DescribeEIURangeResponseBody extends Model
{
    /**
     * @var EIUInfo
     */
    public $EIUInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'EIUInfo' => 'EIUInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->EIUInfo) {
            $this->EIUInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->EIUInfo) {
            $res['EIUInfo'] = null !== $this->EIUInfo ? $this->EIUInfo->toArray($noStream) : $this->EIUInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EIUInfo'])) {
            $model->EIUInfo = EIUInfo::fromMap($map['EIUInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
