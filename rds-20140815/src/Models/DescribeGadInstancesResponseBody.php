<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody\gadInstances;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gadInstances) {
            $res['GadInstances'] = [];
            if (null !== $this->gadInstances && \is_array($this->gadInstances)) {
                $n = 0;
                foreach ($this->gadInstances as $item) {
                    $res['GadInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGadInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GadInstances'])) {
            if (!empty($map['GadInstances'])) {
                $model->gadInstances = [];
                $n                   = 0;
                foreach ($map['GadInstances'] as $item) {
                    $model->gadInstances[$n++] = null !== $item ? gadInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
