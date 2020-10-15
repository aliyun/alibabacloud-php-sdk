<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse\measurementDatas\measurementData;

use AlibabaCloud\Tea\Model;

class resourceFeeData extends Model
{
    /**
     * @var int
     */
    public $storage;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $vcpu;
    protected $_name = [
        'storage' => 'Storage',
        'memory'  => 'Memory',
        'vcpu'    => 'Vcpu',
    ];

    public function validate()
    {
        Model::validateRequired('storage', $this->storage, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('vcpu', $this->vcpu, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Vcpu'])) {
            $model->vcpu = $map['Vcpu'];
        }

        return $model;
    }
}
