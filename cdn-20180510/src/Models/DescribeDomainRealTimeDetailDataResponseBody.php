<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRealTimeDetailDataResponseBody extends Model
{
    /**
     * @description The monitoring data of each ISP in each region.
     *
     * @example [
     * {
     * "time_stp": "2018-06-05T20:00:00Z",
     * "domain_name": "example.com",
     * "location": "Guangdong",
     * "isp": "telecom",
     * "qps": 10
     * },
     * {
     * "time_stp": "2018-06-05T20:00:00Z",
     * "domain_name": "example.com",
     * "location": "Jiangsu",
     * "isp": "unicom",
     * "qps": 11.1
     * }
     * ]
     *
     * @var string
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example B49E6DDA-F413-422B-B58E-2FA23F286726
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRealTimeDetailDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
