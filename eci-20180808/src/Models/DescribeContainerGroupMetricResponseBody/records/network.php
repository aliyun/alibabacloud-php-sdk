<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\network\interfaces;

class network extends Model
{
    /**
     * @var interfaces[]
     */
    public $interfaces;
    protected $_name = [
        'interfaces' => 'Interfaces',
    ];

    public function validate()
    {
        if (\is_array($this->interfaces)) {
            Model::validateArray($this->interfaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interfaces) {
            if (\is_array($this->interfaces)) {
                $res['Interfaces'] = [];
                $n1 = 0;
                foreach ($this->interfaces as $item1) {
                    $res['Interfaces'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Interfaces'])) {
            if (!empty($map['Interfaces'])) {
                $model->interfaces = [];
                $n1 = 0;
                foreach ($map['Interfaces'] as $item1) {
                    $model->interfaces[$n1++] = interfaces::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
