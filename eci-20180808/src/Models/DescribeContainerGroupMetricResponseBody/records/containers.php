<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\containers\CPU;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\containers\memory;

class containers extends Model
{
    /**
     * @var CPU
     */
    public $CPU;

    /**
     * @var memory
     */
    public $memory;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'CPU' => 'CPU',
        'memory' => 'Memory',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->CPU) {
            $this->CPU->validate();
        }
        if (null !== $this->memory) {
            $this->memory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = null !== $this->CPU ? $this->CPU->toArray($noStream) : $this->CPU;
        }

        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toArray($noStream) : $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CPU'])) {
            $model->CPU = CPU::fromMap($map['CPU']);
        }

        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
