<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody;

use AlibabaCloud\Dara\Model;

class disks extends Model
{
    /**
     * @var disks\disks[]
     */
    public $disks;
    protected $_name = [
        'disks' => 'Disks',
    ];

    public function validate()
    {
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1] = disks\disks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
