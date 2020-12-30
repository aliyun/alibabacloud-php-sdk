<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlsOpenStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $slsOpenStatus;
    protected $_name = [
        'requestId'     => 'RequestId',
        'slsOpenStatus' => 'SlsOpenStatus',
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
        if (null !== $this->slsOpenStatus) {
            $res['SlsOpenStatus'] = $this->slsOpenStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlsOpenStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsOpenStatus'])) {
            $model->slsOpenStatus = $map['SlsOpenStatus'];
        }

        return $model;
    }
}
