<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyResponseBody\strategy;
use AlibabaCloud\Tea\Model;

class UpdateBootAndAntiUninstallPolicyResponseBody extends Model
{
    /**
     * @example CB67D866-1E54-5106-89DF-6D70C73E5989
     *
     * @var string
     */
    public $requestId;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'requestId' => 'RequestId',
        'strategy' => 'Strategy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBootAndAntiUninstallPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }

        return $model;
    }
}
