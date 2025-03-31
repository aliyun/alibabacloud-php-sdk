<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items\address;

use AlibabaCloud\Dara\Model;

class ports extends Model
{
    /**
     * @var ports\ports[]
     */
    public $ports;
    protected $_name = [
        'ports' => 'ports',
    ];

    public function validate()
    {
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1++] = ports\ports::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
