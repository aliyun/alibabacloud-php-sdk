<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The point in time when the logs were generated.
     *
     * @example 2021-11-19T15:21:53+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The content of the logs.
     *
     * @example [RequestID: 31d3a0f0-07ed-4f6e-9004-1804498c****, UID-110982038403****] c096d641835af4658827a4c66c234**** | Start to add cluster c186a6d9641a24098b5499d4d8313****
     *
     * @var string
     */
    public $log;

    /**
     * @description The ASM instance ID.
     *
     * @example ca04bc38979214bf2882be79d39b4****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'log'           => 'Log',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
