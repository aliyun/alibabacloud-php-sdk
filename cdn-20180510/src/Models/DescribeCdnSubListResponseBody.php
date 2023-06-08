<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnSubListResponseBody extends Model
{
    /**
     * @description The information about the custom report task.
     *
     * @example {"RequestId":"3250A51D-C11D-46BA-B6B3-95348EEDE652","Description":"Successful","Content":{"data":\[{"subId":5,"reportId":\[1,2,3],"createTime":"2020-09-25T09:39:33Z","domains"\["www.example.com","www.example.com"],"effectiveFrom":"2020-09-17T00:00:00Z","effectiveEnd":"2020-11-17T00:00:00Z","status":"enable"}]}}
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the request.
     *
     * @example 3250A51D-C11D-46BA-B6B3-95348EEDE652
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
     * @return DescribeCdnSubListResponseBody
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
