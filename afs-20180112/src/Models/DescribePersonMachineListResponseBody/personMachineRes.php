<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribePersonMachineListResponseBody;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribePersonMachineListResponseBody\personMachineRes\personMachines;
use AlibabaCloud\Tea\Model;

class personMachineRes extends Model
{
    /**
     * @var personMachines[]
     */
    public $personMachines;

    /**
     * @var string
     */
    public $hasConfiguration;
    protected $_name = [
        'personMachines'   => 'PersonMachines',
        'hasConfiguration' => 'HasConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personMachines) {
            $res['PersonMachines'] = [];
            if (null !== $this->personMachines && \is_array($this->personMachines)) {
                $n = 0;
                foreach ($this->personMachines as $item) {
                    $res['PersonMachines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasConfiguration) {
            $res['HasConfiguration'] = $this->hasConfiguration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personMachineRes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PersonMachines'])) {
            if (!empty($map['PersonMachines'])) {
                $model->personMachines = [];
                $n                     = 0;
                foreach ($map['PersonMachines'] as $item) {
                    $model->personMachines[$n++] = null !== $item ? personMachines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasConfiguration'])) {
            $model->hasConfiguration = $map['HasConfiguration'];
        }

        return $model;
    }
}
