<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCollectQualityResponseBody\returnValue;
use AlibabaCloud\Tea\Model;

class StartCollectQualityResponseBody extends Model
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
     * @var returnValue[]
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
            $res['ReturnValue'] = [];
            if (null !== $this->returnValue && \is_array($this->returnValue)) {
                $n = 0;
                foreach ($this->returnValue as $item) {
                    $res['ReturnValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCollectQualityResponseBody
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
            if (!empty($map['ReturnValue'])) {
                $model->returnValue = [];
                $n                  = 0;
                foreach ($map['ReturnValue'] as $item) {
                    $model->returnValue[$n++] = null !== $item ? returnValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
