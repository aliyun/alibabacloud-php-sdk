<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\RunFunctionResponseBody\runtimeMeta;
use AlibabaCloud\Tea\Model;

class RunFunctionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var runtimeMeta
     */
    public $runtimeMeta;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'requestId'   => 'RequestId',
        'runtimeMeta' => 'RuntimeMeta',
        'result'      => 'Result',
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
        if (null !== $this->runtimeMeta) {
            $res['RuntimeMeta'] = null !== $this->runtimeMeta ? $this->runtimeMeta->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunFunctionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuntimeMeta'])) {
            $model->runtimeMeta = runtimeMeta::fromMap($map['RuntimeMeta']);
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
