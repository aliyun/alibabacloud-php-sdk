<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodRangeDataByLocateAndIspServiceResponseBody extends Model
{
    /**
     * @description The returned result. The value is in the JSON format. These parameters indicate the following information in sequence: UNIX time, region, ISP, distribution of HTTP status codes, response time, bandwidth (bit/s), average response rate, page views, cache hit ratio, and request hit ratio.
     *
     * @var string
     */
    public $jsonResult;

    /**
     * @description The ID of the request.
     *
     * @example C74802AA-C277-5A80-BDF2-072B05F119C7
     *
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
     * @return DescribeVodRangeDataByLocateAndIspServiceResponseBody
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
