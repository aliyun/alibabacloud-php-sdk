<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobDetailResponseBody\APSJobDetail;

class DescribeApsJobDetailResponseBody extends Model
{
    /**
     * @var APSJobDetail
     */
    public $APSJobDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'APSJobDetail' => 'APSJobDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->APSJobDetail) {
            $this->APSJobDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APSJobDetail) {
            $res['APSJobDetail'] = null !== $this->APSJobDetail ? $this->APSJobDetail->toArray($noStream) : $this->APSJobDetail;
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
        if (isset($map['APSJobDetail'])) {
            $model->APSJobDetail = APSJobDetail::fromMap($map['APSJobDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
