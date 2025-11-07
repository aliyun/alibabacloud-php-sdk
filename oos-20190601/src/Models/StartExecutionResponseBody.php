<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody\execution;

class StartExecutionResponseBody extends Model
{
    /**
     * @var execution
     */
    public $execution;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'execution' => 'Execution',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->execution) {
            $this->execution->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->execution) {
            $res['Execution'] = null !== $this->execution ? $this->execution->toArray($noStream) : $this->execution;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
