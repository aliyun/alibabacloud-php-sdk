<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnReportResponseBody extends Model
{
    /**
     * @description The content of the operations report.
     *
     * @example "data":[{"deliver":{ "report":{"title":"TopUrlByAcc","format":"table","sape":"","header":["url","traf","traf_rate","acc","acc_rate"]}}, "data":[{"acc":440,"acc_rate":"0.200%","traf":22,"url":"http://example.com","traf_rate":"0.100%"},{"acc":440,"acc_rate":"0.200%","traf":22,"url":"http://example.org","traf_rate":"0.100%"}]}]
     *
     * @var mixed[]
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
     * @return DescribeDcdnReportResponseBody
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
