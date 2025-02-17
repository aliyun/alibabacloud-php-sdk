<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class cpuOptions extends Model
{
    /**
     * @var int
     */
    public $coreCount;
    /**
     * @var string
     */
    public $numa;
    /**
     * @var int
     */
    public $threadsPerCore;
    /**
     * @var string
     */
    public $topologyType;
    protected $_name = [
        'coreCount'      => 'CoreCount',
        'numa'           => 'Numa',
        'threadsPerCore' => 'ThreadsPerCore',
        'topologyType'   => 'TopologyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coreCount) {
            $res['CoreCount'] = $this->coreCount;
        }

        if (null !== $this->numa) {
            $res['Numa'] = $this->numa;
        }

        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }

        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
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
        if (isset($map['CoreCount'])) {
            $model->coreCount = $map['CoreCount'];
        }

        if (isset($map['Numa'])) {
            $model->numa = $map['Numa'];
        }

        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }

        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }

        return $model;
    }
}
