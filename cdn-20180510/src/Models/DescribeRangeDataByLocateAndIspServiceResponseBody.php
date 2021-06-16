<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeRangeDataByLocateAndIspServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $jsonResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jsonResult' => 'JsonResult',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonResult) {
            $res['JsonResult'] = $this->jsonResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRangeDataByLocateAndIspServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JsonResult'])) {
            $model->jsonResult = $map['JsonResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
