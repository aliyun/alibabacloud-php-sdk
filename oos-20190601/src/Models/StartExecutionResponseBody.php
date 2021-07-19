<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody\execution;
use AlibabaCloud\Tea\Model;

class StartExecutionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var execution
     */
    public $execution;
    protected $_name = [
        'requestId' => 'RequestId',
        'execution' => 'Execution',
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
        if (null !== $this->execution) {
            $res['Execution'] = null !== $this->execution ? $this->execution->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Execution'])) {
            $model->execution = execution::fromMap($map['Execution']);
        }

        return $model;
    }
}
