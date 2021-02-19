<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class CreateLifecycleHookResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $lifecycleHookId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'lifecycleHookId' => 'LifecycleHookId',
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
        if (null !== $this->lifecycleHookId) {
            $res['LifecycleHookId'] = $this->lifecycleHookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLifecycleHookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LifecycleHookId'])) {
            $model->lifecycleHookId = $map['LifecycleHookId'];
        }

        return $model;
    }
}
