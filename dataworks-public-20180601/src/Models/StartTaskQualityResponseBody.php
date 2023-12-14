<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartTaskQualityResponseBody\returnValue;
use AlibabaCloud\Tea\Model;

class StartTaskQualityResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $returnCode;

    /**
     * @var returnValue
     */
    public $returnValue;
    protected $_name = [
        'requestId'   => 'RequestId',
        'returnCode'  => 'ReturnCode',
        'returnValue' => 'ReturnValue',
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
        if (null !== $this->returnCode) {
            $res['ReturnCode'] = $this->returnCode;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = null !== $this->returnValue ? $this->returnValue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartTaskQualityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReturnCode'])) {
            $model->returnCode = $map['ReturnCode'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = returnValue::fromMap($map['ReturnValue']);
        }

        return $model;
    }
}
