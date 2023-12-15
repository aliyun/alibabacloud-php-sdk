<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponseBody\failures;
use AlibabaCloud\Tea\Model;

class PreCheckCreateOrderForDeleteDBNodesResponseBody extends Model
{
    /**
     * @description The information about the failed order.
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
     * @example 9B415BC6-FE84-5323-A255-42CF330DB99C
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
     * @return PreCheckCreateOrderForDeleteDBNodesResponseBody
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
