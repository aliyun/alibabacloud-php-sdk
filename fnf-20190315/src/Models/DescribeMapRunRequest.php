<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class DescribeMapRunRequest extends Model
{
    /**
     * @var string
     */
    public $executionName;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $mapRunName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'executionName' => 'ExecutionName',
        'flowName' => 'FlowName',
        'mapRunName' => 'MapRunName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->mapRunName) {
            $res['MapRunName'] = $this->mapRunName;
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
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['MapRunName'])) {
            $model->mapRunName = $map['MapRunName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
