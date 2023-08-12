<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ReplaceDedicatedHostResponseBody extends Model
{
    /**
     * @example ch-bp10a5id3boqi****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @example D6E068C3-25BC-455A-85FE-45F0B22EDSD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10254125
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
        'requestId'       => 'RequestId',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceDedicatedHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
