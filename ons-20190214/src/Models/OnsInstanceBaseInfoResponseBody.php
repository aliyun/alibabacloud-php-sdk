<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo;
use AlibabaCloud\Tea\Model;

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
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceBaseInfo) {
            $res['InstanceBaseInfo'] = null !== $this->instanceBaseInfo ? $this->instanceBaseInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsInstanceBaseInfoResponseBody
     */
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
