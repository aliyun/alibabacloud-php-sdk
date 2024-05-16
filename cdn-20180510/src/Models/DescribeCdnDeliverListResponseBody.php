<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnDeliverListResponseBody extends Model
{
    /**
     * @description The information about the tracking task.
     *
     * @example "data": [{"deliverId": 1,"status": "enable","createTime": "2020-10-14T11:19:26Z","crontab": "0 0 0 \\* \\* ?","frequency": "d","name": "The name of the tracking task","dmList": ["www.example.com"],"reports": [{"reportId": 1,"conditions": [{"op": "in","field": "prov","value": ["Heilongjiang","Beijing"]}} },{"reportId": 2}],"deliver": {"email": {"subject": "subject","to": ["example@alibaba-inc.com","example@alibaba-inc.com"]}}}]}
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the request.
     *
     * @example 12345
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
     * @return DescribeCdnDeliverListResponseBody
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
