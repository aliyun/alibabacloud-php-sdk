<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreIncrDetailResponseBody\restoreIncrDetail;
use AlibabaCloud\Tea\Model;

class DescribeRestoreIncrDetailResponseBody extends Model
{
    /**
     * @example D0FE2717-E194-465A-B27B-7373F96E580B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var restoreIncrDetail
     */
    public $restoreIncrDetail;
    protected $_name = [
        'requestId'         => 'RequestId',
        'restoreIncrDetail' => 'RestoreIncrDetail',
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
        if (null !== $this->restoreIncrDetail) {
            $res['RestoreIncrDetail'] = null !== $this->restoreIncrDetail ? $this->restoreIncrDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreIncrDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreIncrDetail'])) {
            $model->restoreIncrDetail = restoreIncrDetail::fromMap($map['RestoreIncrDetail']);
        }

        return $model;
    }
}
