<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RunPython3ScriptResponseBody extends Model
{
    /**
     * @example F210521C-D9BF-5264-8369-83EDDC617DB0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {
     * }
     * @var string
     */
    public $runResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'runResult' => 'RunResult',
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
        if (null !== $this->runResult) {
            $res['RunResult'] = $this->runResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunPython3ScriptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RunResult'])) {
            $model->runResult = $map['RunResult'];
        }

        return $model;
    }
}
