<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobDetailResponseBody\APSJobDetail;
use AlibabaCloud\Tea\Model;

class DescribeApsJobDetailResponseBody extends Model
{
    /**
     * @example -
     *
     * @var APSJobDetail
     */
    public $APSJobDetail;

    /**
     * @example ******-E606-4A42-BF6D-******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'APSJobDetail' => 'APSJobDetail',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APSJobDetail) {
            $res['APSJobDetail'] = null !== $this->APSJobDetail ? $this->APSJobDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApsJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APSJobDetail'])) {
            $model->APSJobDetail = APSJobDetail::fromMap($map['APSJobDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
