<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineDetailResponseBody\baselineDetail;

class DescribeImageBaselineDetailResponseBody extends Model
{
    /**
     * @var baselineDetail
     */
    public $baselineDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineDetail' => 'BaselineDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->baselineDetail) {
            $this->baselineDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineDetail) {
            $res['BaselineDetail'] = null !== $this->baselineDetail ? $this->baselineDetail->toArray($noStream) : $this->baselineDetail;
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
        if (isset($map['BaselineDetail'])) {
            $model->baselineDetail = baselineDetail::fromMap($map['BaselineDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
