<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource;

use AlibabaCloud\Dara\Model;

class dataDiskSizes extends Model
{
    /**
     * @var string[]
     */
    public $dataDiskSize;
    protected $_name = [
        'dataDiskSize' => 'DataDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiskSize)) {
            Model::validateArray($this->dataDiskSize);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            if (\is_array($this->dataDiskSize)) {
                $res['DataDiskSize'] = [];
                $n1 = 0;
                foreach ($this->dataDiskSize as $item1) {
                    $res['DataDiskSize'][$n1] = $item1;
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
        if (isset($map['DataDiskSize'])) {
            if (!empty($map['DataDiskSize'])) {
                $model->dataDiskSize = [];
                $n1 = 0;
                foreach ($map['DataDiskSize'] as $item1) {
                    $model->dataDiskSize[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
