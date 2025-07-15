<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody\execution;
use AlibabaCloud\Tea\Model;

class StartExecutionResponseBody extends Model
{
    /**
     * @description The details of the execution.
     *
     * @var execution
     */
    public $execution;

    /**
     * @description The ID of the request.
     *
     * @example 14A07460-EBE7-47CA-9757-12CC4761D47A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'execution' => 'Execution',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->execution) {
            $res['Execution'] = null !== $this->execution ? $this->execution->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartExecutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Execution'])) {
            $model->execution = execution::fromMap($map['Execution']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
