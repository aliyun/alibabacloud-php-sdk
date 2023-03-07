<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteNodesRequest\instance;
use AlibabaCloud\Tea\Model;

class DeleteNodesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var instance[]
     */
    public $instance;

    /**
     * @description Specifies whether to release the instances that are created by using E-HPC.
     *
     * Default value: true
     * @example true
     *
     * @var bool
     */
    public $releaseInstance;

    /**
     * @description Specifies whether to directly delete the node. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $sync;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'instance'        => 'Instance',
        'releaseInstance' => 'ReleaseInstance',
        'sync'            => 'Sync',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instance) {
            $res['Instance'] = [];
            if (null !== $this->instance && \is_array($this->instance)) {
                $n = 0;
                foreach ($this->instance as $item) {
                    $res['Instance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->releaseInstance) {
            $res['ReleaseInstance'] = $this->releaseInstance;
        }
        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $n               = 0;
                foreach ($map['Instance'] as $item) {
                    $model->instance[$n++] = null !== $item ? instance::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReleaseInstance'])) {
            $model->releaseInstance = $map['ReleaseInstance'];
        }
        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
        }

        return $model;
    }
}
