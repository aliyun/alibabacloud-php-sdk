<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponseBody\failures;

class PreCheckCreateOrderForDeleteDBNodesResponseBody extends Model
{
    /**
     * @var failures
     */
    public $failures;

    /**
     * @var bool
     */
    public $preCheckResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failures' => 'Failures',
        'preCheckResult' => 'PreCheckResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->failures) {
            $this->failures->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failures) {
            $res['Failures'] = null !== $this->failures ? $this->failures->toArray($noStream) : $this->failures;
        }

        if (null !== $this->preCheckResult) {
            $res['PreCheckResult'] = $this->preCheckResult;
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
        if (isset($map['Failures'])) {
            $model->failures = failures::fromMap($map['Failures']);
        }

        if (isset($map['PreCheckResult'])) {
            $model->preCheckResult = $map['PreCheckResult'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
