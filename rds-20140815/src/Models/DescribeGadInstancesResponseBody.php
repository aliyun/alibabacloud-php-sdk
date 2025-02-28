<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody\gadInstances;

class DescribeGadInstancesResponseBody extends Model
{
    /**
     * @var gadInstances[]
     */
    public $gadInstances;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gadInstances' => 'GadInstances',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->gadInstances)) {
            Model::validateArray($this->gadInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gadInstances) {
            if (\is_array($this->gadInstances)) {
                $res['GadInstances'] = [];
                $n1                  = 0;
                foreach ($this->gadInstances as $item1) {
                    $res['GadInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GadInstances'])) {
            if (!empty($map['GadInstances'])) {
                $model->gadInstances = [];
                $n1                  = 0;
                foreach ($map['GadInstances'] as $item1) {
                    $model->gadInstances[$n1++] = gadInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
