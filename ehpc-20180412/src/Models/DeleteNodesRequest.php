<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteNodesRequest\instance;

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

    /**
     * @var bool
     */
    public $sync;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'instance' => 'Instance',
        'releaseInstance' => 'ReleaseInstance',
        'sync' => 'Sync',
    ];

    public function validate()
    {
        if (\is_array($this->instance)) {
            Model::validateArray($this->instance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->instance) {
            if (\is_array($this->instance)) {
                $res['Instance'] = [];
                $n1 = 0;
                foreach ($this->instance as $item1) {
                    $res['Instance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $n1 = 0;
                foreach ($map['Instance'] as $item1) {
                    $model->instance[$n1++] = instance::fromMap($item1);
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
