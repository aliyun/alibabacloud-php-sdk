<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackResponseBody\dryRunResult;

class ContinueCreateStackResponseBody extends Model
{
    /**
     * @var dryRunResult
     */
    public $dryRunResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'dryRunResult' => 'DryRunResult',
        'requestId' => 'RequestId',
        'stackId' => 'StackId',
    ];

    public function validate()
    {
        if (null !== $this->dryRunResult) {
            $this->dryRunResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = null !== $this->dryRunResult ? $this->dryRunResult->toArray($noStream) : $this->dryRunResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
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
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = dryRunResult::fromMap($map['DryRunResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
