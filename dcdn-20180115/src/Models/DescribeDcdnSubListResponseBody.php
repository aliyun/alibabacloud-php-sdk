<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnSubListResponseBody extends Model
{
    /**
     * @description The information about the custom report.
     *
     * @example "data": [{"subId": 336,"reportId": [6,8],"createTime": "2021-07-05T06:18:46Z","domains": ["example.com"],"effectiveFrom": "2021-07-05T06:18:46Z","effectiveEnd": "2021-10-05T06:18:46Z","status": "enable"}]
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
     * @return DescribeDcdnSubListResponseBody
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
