<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRealTimeDetailDataResponseBody extends Model
{
    /**
     * @description The data usage of each ISP and the number of visits in each region.
     *
     * @example {         "2019-11-30T05:40:00Z": {             "example.com": {                 "Guangdong": {                     "telecom": {                         "qps": 10.0,                         "http_code": {"200": 1, "304": 2}                     }                 },                 "Jiangsu": {                     "unicom": {                         "qps": 11.1,                         "http_code": {"200": 1, "304": 2, "403": 3}                     }                 }             }         }    }
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example B49E6DDA-F413-422B-B58E-2FA23F286726
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
