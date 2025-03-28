<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup;

class GetStackGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stackGroup
     */
    public $stackGroup;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackGroup' => 'StackGroup',
    ];

    public function validate()
    {
        if (null !== $this->stackGroup) {
            $this->stackGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stackGroup) {
            $res['StackGroup'] = null !== $this->stackGroup ? $this->stackGroup->toArray($noStream) : $this->stackGroup;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StackGroup'])) {
            $model->stackGroup = stackGroup::fromMap($map['StackGroup']);
        }

        return $model;
    }
}
