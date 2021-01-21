<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
        'stackGroup' => 'StackGroup',
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
        if (null !== $this->stackGroup) {
            $res['StackGroup'] = null !== $this->stackGroup ? $this->stackGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackGroupResponseBody
     */
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
