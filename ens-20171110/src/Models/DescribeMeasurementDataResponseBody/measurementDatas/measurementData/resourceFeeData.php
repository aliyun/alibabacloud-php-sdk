<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData;

use AlibabaCloud\Dara\Model;

class resourceFeeData extends Model
{
    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $storage;

    /**
     * @var int
     */
    public $vcpu;
    protected $_name = [
        'memory' => 'Memory',
        'storage' => 'Storage',
        'vcpu' => 'Vcpu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
