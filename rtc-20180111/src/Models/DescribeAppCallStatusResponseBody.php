<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppCallStatusResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 20A6D1E3-1F5F-5440-A4F1-EC7831646FE4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example enable
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'requestId' => 'RequestId',
        'result' => 'Result',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppCallStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
