<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource;

use AlibabaCloud\Dara\Model;

class systemDiskSizes extends Model
{
    /**
     * @var string[]
     */
    public $systemDiskSize;
    protected $_name = [
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->systemDiskSize)) {
            Model::validateArray($this->systemDiskSize);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemDiskSize) {
            if (\is_array($this->systemDiskSize)) {
                $res['SystemDiskSize'] = [];
                $n1 = 0;
                foreach ($this->systemDiskSize as $item1) {
                    $res['SystemDiskSize'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SystemDiskSize'])) {
            if (!empty($map['SystemDiskSize'])) {
                $model->systemDiskSize = [];
                $n1 = 0;
                foreach ($map['SystemDiskSize'] as $item1) {
                    $model->systemDiskSize[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
