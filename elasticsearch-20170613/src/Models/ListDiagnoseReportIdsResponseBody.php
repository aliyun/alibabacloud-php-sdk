<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportIdsResponseBody\headers;
use AlibabaCloud\Tea\Model;

class ListDiagnoseReportIdsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $result;

    /**
     * @var headers
     */
    public $headers;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'headers'   => 'Headers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnoseReportIdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = $map['Result'];
            }
        }
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }

        return $model;
    }
}
