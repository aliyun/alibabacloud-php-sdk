<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\RunFunctionResponseBody\runtimeMeta;
use AlibabaCloud\Tea\Model;

class RunFunctionResponseBody extends Model
{
    /**
     * @example F75E60FA-7583-4E2E-AC14-6C608F89804
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {"name":"tom"}
     *
     * @var string
     */
    public $result;

    /**
     * @var runtimeMeta
     */
    public $runtimeMeta;
    protected $_name = [
        'requestId'   => 'RequestId',
        'result'      => 'Result',
        'runtimeMeta' => 'RuntimeMeta',
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
        if (null !== $this->runtimeMeta) {
            $res['RuntimeMeta'] = null !== $this->runtimeMeta ? $this->runtimeMeta->toMap() : null;
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['RuntimeMeta'])) {
            $model->runtimeMeta = runtimeMeta::fromMap($map['RuntimeMeta']);
        }

        return $model;
    }
}
