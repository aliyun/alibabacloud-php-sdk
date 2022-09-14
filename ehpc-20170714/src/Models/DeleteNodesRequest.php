<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models;

use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteNodesRequest\instance;
use AlibabaCloud\Tea\Model;

class DeleteNodesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var instance[]
     */
    public $instance;

    /**
     * @var bool
     */
    public $releaseInstance;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'instance'        => 'Instance',
        'releaseInstance' => 'ReleaseInstance',
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

        return $model;
    }
}
