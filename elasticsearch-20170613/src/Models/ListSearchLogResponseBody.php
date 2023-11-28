<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSearchLogResponseBody\headers;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSearchLogResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListSearchLogResponseBody extends Model
{
    /**
     * @description The level of the log. Valid values:
     *
     *   warn: warning log
     *   info: information log
     *   error: error log
     *   trace: trace logs
     *   debug: debug logs
     *
     * The level information has been migrated to the contentCollection field.
     * @var headers
     */
    public $headers;

    /**
     * @description The list of logs returned by the request.
     *
     * @example 7F40EAA1-6F1D-4DD9-8DB8-C5F00C4E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The content of the log entry. Migrated to the contentCollection field.
     *
     * @var result[]
     */
    public $result;
    protected $_name = [
        'headers'   => 'Headers',
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSearchLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
