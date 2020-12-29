<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @var string
     */
    public $numa;

    /**
     * @var int
     */
    public $coreCount;

    /**
     * @var int
     */
    public $threadsPerCore;
    protected $_name = [
        'numa'           => 'Numa',
        'coreCount'      => 'CoreCount',
        'threadsPerCore' => 'ThreadsPerCore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->numa) {
            $res['Numa'] = $this->numa;
        }
        if (null !== $this->coreCount) {
            $res['CoreCount'] = $this->coreCount;
        }
        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Numa'])) {
            $model->numa = $map['Numa'];
        }
        if (isset($map['CoreCount'])) {
            $model->coreCount = $map['CoreCount'];
        }
        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }

        return $model;
    }
}
