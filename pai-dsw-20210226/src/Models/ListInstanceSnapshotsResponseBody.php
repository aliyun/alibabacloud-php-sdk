<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceSnapshotsResponseBody extends Model
{
    /**
     * @description 镜像快照列表
     *
     * @var InstanceSnapshot[]
     */
    public $instanceSnapshots;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSnapshots' => 'InstanceSnapshots',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSnapshots) {
            $res['InstanceSnapshots'] = [];
            if (null !== $this->instanceSnapshots && \is_array($this->instanceSnapshots)) {
                $n = 0;
                foreach ($this->instanceSnapshots as $item) {
                    $res['InstanceSnapshots'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListInstanceSnapshotsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSnapshots'])) {
            if (!empty($map['InstanceSnapshots'])) {
                $model->instanceSnapshots = [];
                $n                        = 0;
                foreach ($map['InstanceSnapshots'] as $item) {
                    $model->instanceSnapshots[$n++] = null !== $item ? InstanceSnapshot::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
