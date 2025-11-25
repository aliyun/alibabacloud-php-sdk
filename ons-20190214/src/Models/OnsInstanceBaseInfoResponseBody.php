<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo;

class OnsInstanceBaseInfoResponseBody extends Model
{
    /**
     * @var instanceBaseInfo
     */
    public $instanceBaseInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceBaseInfo' => 'InstanceBaseInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceBaseInfo) {
            $this->instanceBaseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceBaseInfo) {
            $res['InstanceBaseInfo'] = null !== $this->instanceBaseInfo ? $this->instanceBaseInfo->toArray($noStream) : $this->instanceBaseInfo;
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
        if (isset($map['InstanceBaseInfo'])) {
            $model->instanceBaseInfo = instanceBaseInfo::fromMap($map['InstanceBaseInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
