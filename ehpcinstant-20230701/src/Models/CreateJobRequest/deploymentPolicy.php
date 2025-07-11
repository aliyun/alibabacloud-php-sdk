<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\deploymentPolicy\network;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\deploymentPolicy\tag;
use AlibabaCloud\Tea\Model;

class deploymentPolicy extends Model
{
    /**
     * @example Dedicated
     *
     * @var string
     */
    public $allocationSpec;

    /**
     * @var string
     */
    public $level;

    /**
     * @var network
     */
    public $network;

    /**
     * @var string
     */
    public $pool;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'allocationSpec' => 'AllocationSpec',
        'level' => 'Level',
        'network' => 'Network',
        'pool' => 'Pool',
        'priority' => 'Priority',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationSpec) {
            $res['AllocationSpec'] = $this->allocationSpec;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->pool) {
            $res['Pool'] = $this->pool;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationSpec'])) {
            $model->allocationSpec = $map['AllocationSpec'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }
        if (isset($map['Pool'])) {
            $model->pool = $map['Pool'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
