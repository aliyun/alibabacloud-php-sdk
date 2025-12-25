<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesResponseBody\namespaces;

use AlibabaCloud\Dara\Model;

class resourceUsed extends Model
{
    /**
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $cu;

    /**
     * @var float
     */
    public $memoryGB;
    protected $_name = [
        'cpu' => 'Cpu',
        'cu' => 'Cu',
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

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
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

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['MemoryGB'])) {
            $model->memoryGB = $map['MemoryGB'];
        }

        return $model;
    }
}
