<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceRequest\namespaceResourceSpecs;

use AlibabaCloud\Tea\Model;

class resourceSpec extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 4
     *
     * @var int
     */
    public $memoryGB;
    protected $_name = [
        'cpu'      => 'Cpu',
        'memoryGB' => 'MemoryGB',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resourceSpec
     */
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
