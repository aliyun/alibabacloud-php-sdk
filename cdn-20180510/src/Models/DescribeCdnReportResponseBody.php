<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnReportResponseBody extends Model
{
    /**
     * @example "data":[{"deliver":{"report":{"title":"TopUrlByAcc","format":"table","shape":"","header":["url","traf","traf_rate","acc","acc_rate"]}},"data":[{"acc":440,"acc_rate":"0.200%","traf":22,"url":"http://demo.com","traf_rate":"0.100%"},{"acc":440,"acc_rate":"0.200%","traf":22,"url":"http://demo.com","traf_rate":"0.100%"}]}]}}
     *
     * @var mixed[]
     */
    public $content;

    /**
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
     * @return DescribeCdnReportResponseBody
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
