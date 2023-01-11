<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponseBody\stackInstance;
use AlibabaCloud\Tea\Model;

class GetStackInstanceResponseBody extends Model
{
    /**
     * @example B8A6B693-82C8-419D-8796-DE99EC33CFF9
     *
     * @var string
     */
    public $requestId;

    /**
     * @var stackInstance
     */
    public $stackInstance;
    protected $_name = [
        'requestId'     => 'RequestId',
        'stackInstance' => 'StackInstance',
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
        if (null !== $this->stackInstance) {
            $res['StackInstance'] = null !== $this->stackInstance ? $this->stackInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackInstance'])) {
            $model->stackInstance = stackInstance::fromMap($map['StackInstance']);
        }

        return $model;
    }
}
