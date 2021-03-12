<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressDubboResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stringValue;

    /**
     * @var int
     */
    public $intValue;
    protected $_name = [
        'requestId'   => 'RequestId',
        'stringValue' => 'StringValue',
        'intValue'    => 'IntValue',
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
        if (null !== $this->stringValue) {
            $res['StringValue'] = $this->stringValue;
        }
        if (null !== $this->intValue) {
            $res['IntValue'] = $this->intValue;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StringValue'])) {
            $model->stringValue = $map['StringValue'];
        }
        if (isset($map['IntValue'])) {
            $model->intValue = $map['IntValue'];
        }

        return $model;
    }
}
