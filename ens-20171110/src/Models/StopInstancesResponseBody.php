<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class StopInstancesResponseBody extends Model
{
    /**
     * @var InstanceOperateResponse[]
     */
    public $instanceResponses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceResponses' => 'InstanceResponses',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceResponses) {
            $res['InstanceResponses'] = [];
            if (null !== $this->instanceResponses && \is_array($this->instanceResponses)) {
                $n = 0;
                foreach ($this->instanceResponses as $item) {
                    $res['InstanceResponses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceResponses'])) {
            if (!empty($map['InstanceResponses'])) {
                $model->instanceResponses = [];
                $n                        = 0;
                foreach ($map['InstanceResponses'] as $item) {
                    $model->instanceResponses[$n++] = null !== $item ? InstanceOperateResponse::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
