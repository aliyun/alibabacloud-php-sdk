<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody\disks\disks[]
     */
    public $disks;
    protected $_name = [
        'disks' => 'Disks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n            = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? \AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody\disks\disks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
