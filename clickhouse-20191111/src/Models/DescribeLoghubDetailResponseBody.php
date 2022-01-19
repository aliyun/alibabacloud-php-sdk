<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailResponseBody\loghubInfo;
use AlibabaCloud\Tea\Model;

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
     * @return DescribeLoghubDetailResponseBody
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
