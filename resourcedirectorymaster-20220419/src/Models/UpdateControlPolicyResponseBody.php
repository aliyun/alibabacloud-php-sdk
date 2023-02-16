<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateControlPolicyResponseBody\controlPolicy;
use AlibabaCloud\Tea\Model;

class UpdateControlPolicyResponseBody extends Model
{
    /**
     * @var controlPolicy
     */
    public $controlPolicy;

    /**
     * @example 2DFCE4C9-04A9-4C83-BB14-FE791275EC53
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'controlPolicy' => 'ControlPolicy',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlPolicy) {
            $res['ControlPolicy'] = null !== $this->controlPolicy ? $this->controlPolicy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateControlPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlPolicy'])) {
            $model->controlPolicy = controlPolicy::fromMap($map['ControlPolicy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
