<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHiStoreInstanceInfoResponseBody\hiStoreInstanceInfo;
use AlibabaCloud\Tea\Model;

class DescribeHiStoreInstanceInfoResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hiStoreInstanceInfo
     */
    public $hiStoreInstanceInfo;
    protected $_name = [
        'success'             => 'Success',
        'requestId'           => 'RequestId',
        'hiStoreInstanceInfo' => 'HiStoreInstanceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hiStoreInstanceInfo) {
            $res['HiStoreInstanceInfo'] = null !== $this->hiStoreInstanceInfo ? $this->hiStoreInstanceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHiStoreInstanceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HiStoreInstanceInfo'])) {
            $model->hiStoreInstanceInfo = hiStoreInstanceInfo::fromMap($map['HiStoreInstanceInfo']);
        }

        return $model;
    }
}
