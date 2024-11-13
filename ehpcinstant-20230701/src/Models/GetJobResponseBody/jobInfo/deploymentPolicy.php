<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\deploymentPolicy\network;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\deploymentPolicy\tags;
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
     * @var network
     */
    public $network;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'allocationSpec' => 'AllocationSpec',
        'network'        => 'Network',
        'tags'           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationSpec) {
            $res['AllocationSpec'] = $this->allocationSpec;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
