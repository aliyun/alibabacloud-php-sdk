<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\deploymentPolicy\network;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\deploymentPolicy\tag;

class deploymentPolicy extends Model
{
    /**
     * @var string
     */
    public $allocationSpec;
    /**
     * @var network
     */
    public $network;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'allocationSpec' => 'AllocationSpec',
        'network'        => 'Network',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationSpec) {
            $res['AllocationSpec'] = $this->allocationSpec;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AllocationSpec'])) {
            $model->allocationSpec = $map['AllocationSpec'];
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
