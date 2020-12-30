<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\SDK\Airec\V20181012\Models\ListLogsResponseBody\headers;
use AlibabaCloud\Tea\Model;

class ListLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var headers
     */
    public $headers;

    /**
     * @var mixed[][]
     */
    public $result;
    protected $_name = [
        'requestId' => 'RequestId',
        'headers'   => 'Headers',
        'result'    => 'Result',
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
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = $map['Result'];
            }
        }

        return $model;
    }
}
