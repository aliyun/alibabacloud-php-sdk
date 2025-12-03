<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\serviceConnAddrs\serviceConnAddr;

class serviceConnAddrs extends Model
{
    /**
     * @var serviceConnAddr[]
     */
    public $serviceConnAddr;
    protected $_name = [
        'serviceConnAddr' => 'ServiceConnAddr',
    ];

    public function validate()
    {
        if (\is_array($this->serviceConnAddr)) {
            Model::validateArray($this->serviceConnAddr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceConnAddr) {
            if (\is_array($this->serviceConnAddr)) {
                $res['ServiceConnAddr'] = [];
                $n1 = 0;
                foreach ($this->serviceConnAddr as $item1) {
                    $res['ServiceConnAddr'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServiceConnAddr'])) {
            if (!empty($map['ServiceConnAddr'])) {
                $model->serviceConnAddr = [];
                $n1 = 0;
                foreach ($map['ServiceConnAddr'] as $item1) {
                    $model->serviceConnAddr[$n1] = serviceConnAddr::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
