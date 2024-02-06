<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData;

use AlibabaCloud\Tea\Model;

class resourceFeeData extends Model
{
    /**
     * @description The memory size. Unit: GB.
     *
     * @example 24
     *
     * @var int
     */
    public $memory;

    /**
     * @description The storage capacity. Unit: GB.
     *
     * @example 60
     *
     * @var int
     */
    public $storage;

    /**
     * @description The number of vCPUs.
     *
     * @example 12
     *
     * @var int
     */
    public $vcpu;
    protected $_name = [
        'memory'  => 'Memory',
        'storage' => 'Storage',
        'vcpu'    => 'Vcpu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->vcpu) {
            $res['Vcpu'] = $this->vcpu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceFeeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['Vcpu'])) {
            $model->vcpu = $map['Vcpu'];
        }

        return $model;
    }
}
