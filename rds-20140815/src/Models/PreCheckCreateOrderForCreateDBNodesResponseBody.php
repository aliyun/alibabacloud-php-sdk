<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForCreateDBNodesResponseBody\failures;
use AlibabaCloud\Tea\Model;

class PreCheckCreateOrderForCreateDBNodesResponseBody extends Model
{
    /**
     * @description The information about nodes that fail to be created.
     *
     * @var failures
     */
    public $failures;

    /**
     * @description The precheck result.
     *
     * @example True
     *
     * @var bool
     */
    public $preCheckResult;

    /**
     * @description The request ID.
     *
     * @example 3E36DB6E-AE3B-53B6-A703-85F883FD1B2C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failures'       => 'Failures',
        'preCheckResult' => 'PreCheckResult',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failures) {
            $res['Failures'] = null !== $this->failures ? $this->failures->toMap() : null;
        }
        if (null !== $this->preCheckResult) {
            $res['PreCheckResult'] = $this->preCheckResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreCheckCreateOrderForCreateDBNodesResponseBody
     */
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
