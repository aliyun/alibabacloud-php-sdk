<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailResponseBody\loghubInfo;

class DescribeLoghubDetailResponseBody extends Model
{
    /**
     * @var loghubInfo
     */
    public $loghubInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loghubInfo' => 'LoghubInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->loghubInfo) {
            $this->loghubInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loghubInfo) {
            $res['LoghubInfo'] = null !== $this->loghubInfo ? $this->loghubInfo->toArray($noStream) : $this->loghubInfo;
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
        if (isset($map['LoghubInfo'])) {
            $model->loghubInfo = loghubInfo::fromMap($map['LoghubInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
