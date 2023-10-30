<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesResponseBody\namespaces;

use AlibabaCloud\Tea\Model;

class resourceUsed extends Model
{
    /**
     * @example 2.5
     *
     * @var float
     */
    public $cpu;

    /**
     * @example 1.6
     *
     * @var float
     */
    public $cu;

    /**
     * @example 6.6
     *
     * @var float
     */
    public $memoryGB;
    protected $_name = [
        'cpu'      => 'Cpu',
        'cu'       => 'Cu',
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
        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }
        if (null !== $this->memoryGB) {
            $res['MemoryGB'] = $this->memoryGB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceUsed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }
        if (isset($map['MemoryGB'])) {
            $model->memoryGB = $map['MemoryGB'];
        }

        return $model;
    }
}
