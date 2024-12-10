<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogHubAttributeResponseBody\loghubInfo;
use AlibabaCloud\Tea\Model;

class DescribeLogHubAttributeResponseBody extends Model
{
    /**
     * @var loghubInfo
     */
    public $loghubInfo;

    /**
     * @example 8A564B7F-8C00-43C0-8EC5-919FBB70573
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loghubInfo' => 'LoghubInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loghubInfo) {
            $res['LoghubInfo'] = null !== $this->loghubInfo ? $this->loghubInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogHubAttributeResponseBody
     */
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
