<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesStatusResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var InstanceStatus[]
     */
    public $statuses;
    protected $_name = [
        'requestId' => 'RequestId',
        'statuses'  => 'Statuses',
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
        if (null !== $this->statuses) {
            $res['Statuses'] = [];
            if (null !== $this->statuses && \is_array($this->statuses)) {
                $n = 0;
                foreach ($this->statuses as $item) {
                    $res['Statuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n               = 0;
                foreach ($map['Statuses'] as $item) {
                    $model->statuses[$n++] = null !== $item ? InstanceStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
