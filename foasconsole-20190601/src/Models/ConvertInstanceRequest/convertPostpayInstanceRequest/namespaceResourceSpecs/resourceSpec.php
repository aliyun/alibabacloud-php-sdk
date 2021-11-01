<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertInstanceRequest\convertPostpayInstanceRequest\namespaceResourceSpecs;

use AlibabaCloud\Tea\Model;

class resourceSpec extends Model
{
    /**
     * @description cpu数量。
     *
     * @var int
     */
    public $cpu;

    /**
     * @description 内存大小。
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
