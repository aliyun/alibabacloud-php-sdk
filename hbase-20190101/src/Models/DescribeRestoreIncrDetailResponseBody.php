<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreIncrDetailResponseBody\restoreIncrDetail;

class DescribeRestoreIncrDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreIncrDetail
     */
    public $restoreIncrDetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'restoreIncrDetail' => 'RestoreIncrDetail',
    ];

    public function validate()
    {
        if (null !== $this->restoreIncrDetail) {
            $this->restoreIncrDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restoreIncrDetail) {
            $res['RestoreIncrDetail'] = null !== $this->restoreIncrDetail ? $this->restoreIncrDetail->toArray($noStream) : $this->restoreIncrDetail;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RestoreIncrDetail'])) {
            $model->restoreIncrDetail = restoreIncrDetail::fromMap($map['RestoreIncrDetail']);
        }

        return $model;
    }
}
