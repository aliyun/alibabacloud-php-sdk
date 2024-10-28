<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class SetSuccessTaskInstancesResponseBody extends Model
{
    /**
     * @example 22C97E95-F023-56B5-8852-B1A77A17XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var SuccessInfoValue[]
     */
    public $successInfo;
    protected $_name = [
        'requestId'   => 'RequestId',
        'successInfo' => 'SuccessInfo',
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
        if (null !== $this->successInfo) {
            $res['SuccessInfo'] = [];
            if (null !== $this->successInfo && \is_array($this->successInfo)) {
                foreach ($this->successInfo as $key => $val) {
                    $res['SuccessInfo'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSuccessTaskInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessInfo'])) {
            $model->successInfo = $map['SuccessInfo'];
        }

        return $model;
    }
}
