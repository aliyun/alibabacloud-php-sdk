<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CreateDataFlowSubTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataFlowSubTaskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataFlowSubTaskId' => 'DataFlowSubTaskId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataFlowSubTaskId) {
            $res['DataFlowSubTaskId'] = $this->dataFlowSubTaskId;
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
        if (isset($map['DataFlowSubTaskId'])) {
            $model->dataFlowSubTaskId = $map['DataFlowSubTaskId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
