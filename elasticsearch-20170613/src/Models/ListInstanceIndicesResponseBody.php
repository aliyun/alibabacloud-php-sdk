<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponseBody\headers;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListInstanceIndicesResponseBody extends Model
{
    /**
     * @description The total size of the OpenStore cold stage index for this instance. Unit: bytes.
     *
     * @var headers
     */
    public $headers;

    /**
     * @description The total number of indexes in Cloud Hosting.
     *
     * @example F99407AB-2FA9-489E-A259-40CF6DCC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total storage space occupied by the current index. Unit: bytes.
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
     * @return ListInstanceIndicesResponseBody
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
