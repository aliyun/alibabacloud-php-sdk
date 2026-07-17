<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\scalingGroup;

use AlibabaCloud\Dara\Model;

class cpuOptions extends Model
{
    /**
     * @var string
     */
    public $nestedVirtualization;
    protected $_name = [
        'nestedVirtualization' => 'nested_virtualization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nestedVirtualization) {
            $res['nested_virtualization'] = $this->nestedVirtualization;
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
        if (isset($map['nested_virtualization'])) {
            $model->nestedVirtualization = $map['nested_virtualization'];
        }

        return $model;
    }
}
