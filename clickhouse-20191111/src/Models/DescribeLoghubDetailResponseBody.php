<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailResponseBody\loghubInfo;
use AlibabaCloud\Tea\Model;

class DescribeLoghubDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var loghubInfo
     */
    public $loghubInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'loghubInfo' => 'LoghubInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->loghubInfo) {
            $res['LoghubInfo'] = null !== $this->loghubInfo ? $this->loghubInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoghubDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LoghubInfo'])) {
            $model->loghubInfo = loghubInfo::fromMap($map['LoghubInfo']);
        }

        return $model;
    }
}
