<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddExistedNodesRequest\instance;

class AddExistedNodesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var instance[]
     */
    public $instance;

    /**
     * @var string
     */
    public $jobQueue;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'imageId' => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'instance' => 'Instance',
        'jobQueue' => 'JobQueue',
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

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
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

        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
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

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
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

        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }

        return $model;
    }
}
