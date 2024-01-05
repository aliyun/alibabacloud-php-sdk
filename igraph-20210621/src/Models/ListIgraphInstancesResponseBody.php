<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\SDK\Igraph\V20210621\Models\ListIgraphInstancesResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListIgraphInstancesResponseBody extends Model
{
    /**
     * @example InternalServerError
     *
     * @var string
     */
    public $code;

    /**
     * @example internal server error
     *
     * @var string
     */
    public $message;

    /**
     * @example 90D6B8F5-FE97-4509-9AAB-367836C51818
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result[]
     */
    public $result;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIgraphInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
