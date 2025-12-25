<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest\createInstanceRequest;

use AlibabaCloud\Dara\Model;

class resourceSpec extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $memoryGB;
    protected $_name = [
        'cpu' => 'Cpu',
        'memoryGB' => 'MemoryGB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->memoryGB) {
            $res['MemoryGB'] = $this->memoryGB;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['MemoryGB'])) {
            $model->memoryGB = $map['MemoryGB'];
        }

        return $model;
    }
}
