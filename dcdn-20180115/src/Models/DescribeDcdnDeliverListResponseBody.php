<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDeliverListResponseBody extends Model
{
    /**
     * @description The information about the tracking task.
     *
     * @example "data": \[{"deliverId": 1,"status": "enable","createTime": "2021-06-14T11:19:26Z","crontab": "0 0 0 \* \* ?","frequency": "d","name": "Domain name report","dmList": \["www.example.com"],"reports": \[{"reportId": 1,"conditions": \[{"op": "in","field": "prov","value": \["Heilongjiang","Beijing"]}]},{"reportId": 2}],"deliver": {"email": {"subject": "subject","to": \["username@example.com","username@example.org"],"copy":\["username@example.com","username@example.org"]}}}]}
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content'   => 'Content',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDeliverListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
