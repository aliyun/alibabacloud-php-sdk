<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHiStoreInstanceInfoResponseBody\hiStoreInstanceInfo;
use AlibabaCloud\Tea\Model;

class DescribeHiStoreInstanceInfoResponseBody extends Model
{
    /**
     * @var hiStoreInstanceInfo
     */
    public $hiStoreInstanceInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'hiStoreInstanceInfo' => 'HiStoreInstanceInfo',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hiStoreInstanceInfo) {
            $res['HiStoreInstanceInfo'] = null !== $this->hiStoreInstanceInfo ? $this->hiStoreInstanceInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['HiStoreInstanceInfo'])) {
            $model->hiStoreInstanceInfo = hiStoreInstanceInfo::fromMap($map['HiStoreInstanceInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
