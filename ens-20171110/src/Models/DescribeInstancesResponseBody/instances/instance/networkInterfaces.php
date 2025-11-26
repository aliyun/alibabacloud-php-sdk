<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterfaces;

class networkInterfaces extends Model
{
    /**
     * @var networkInterfaces[]
     */
    public $networkInterfaces;
    protected $_name = [
        'networkInterfaces' => 'NetworkInterfaces',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterfaces)) {
            Model::validateArray($this->networkInterfaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaces) {
            if (\is_array($this->networkInterfaces)) {
                $res['NetworkInterfaces'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaces as $item1) {
                    $res['NetworkInterfaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkInterfaces'])) {
            if (!empty($map['NetworkInterfaces'])) {
                $model->networkInterfaces = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaces'] as $item1) {
                    $model->networkInterfaces[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
