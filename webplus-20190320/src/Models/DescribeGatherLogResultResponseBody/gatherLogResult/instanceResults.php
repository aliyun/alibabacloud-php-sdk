<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherLogResultResponseBody\gatherLogResult;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherLogResultResponseBody\gatherLogResult\instanceResults\instanceResult;
use AlibabaCloud\Tea\Model;

class instanceResults extends Model
{
    /**
     * @var instanceResult[]
     */
    public $instanceResult;
    protected $_name = [
        'instanceResult' => 'InstanceResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceResult) {
            $res['InstanceResult'] = [];
            if (null !== $this->instanceResult && \is_array($this->instanceResult)) {
                $n = 0;
                foreach ($this->instanceResult as $item) {
                    $res['InstanceResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceResult'])) {
            if (!empty($map['InstanceResult'])) {
                $model->instanceResult = [];
                $n                     = 0;
                foreach ($map['InstanceResult'] as $item) {
                    $model->instanceResult[$n++] = null !== $item ? instanceResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
