<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressDubboResponseBody extends Model
{
    /**
     * @var int
     */
    public $intValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stringValue;
    protected $_name = [
        'intValue'    => 'IntValue',
        'requestId'   => 'RequestId',
        'stringValue' => 'StringValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intValue) {
            $res['IntValue'] = $this->intValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stringValue) {
            $res['StringValue'] = $this->stringValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FtDynamicAddressDubboResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntValue'])) {
            $model->intValue = $map['IntValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StringValue'])) {
            $model->stringValue = $map['StringValue'];
        }

        return $model;
    }
}
