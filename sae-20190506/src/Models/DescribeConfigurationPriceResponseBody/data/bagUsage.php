<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data;

use AlibabaCloud\Tea\Model;

class bagUsage extends Model
{
    /**
     * @example 497570.450009
     *
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $cu;

    /**
     * @example 989802.563546
     *
     * @var float
     */
    public $mem;
    protected $_name = [
        'cpu' => 'Cpu',
        'cu'  => 'Cu',
        'mem' => 'Mem',
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
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bagUsage
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
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        return $model;
    }
}
