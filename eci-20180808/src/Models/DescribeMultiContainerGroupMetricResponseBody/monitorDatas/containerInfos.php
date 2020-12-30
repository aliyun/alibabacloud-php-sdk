<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerSpec;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;
use AlibabaCloud\Tea\Model;

class containerInfos extends Model
{
    /**
     * @var string[]
     */
    public $aliases;

    /**
     * @var containerSpec
     */
    public $containerSpec;

    /**
     * @var containerStats[]
     */
    public $containerStats;
    protected $_name = [
        'aliases'        => 'Aliases',
        'containerSpec'  => 'ContainerSpec',
        'containerStats' => 'ContainerStats',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliases) {
            $res['Aliases'] = $this->aliases;
        }
        if (null !== $this->containerSpec) {
            $res['ContainerSpec'] = null !== $this->containerSpec ? $this->containerSpec->toMap() : null;
        }
        if (null !== $this->containerStats) {
            $res['ContainerStats'] = [];
            if (null !== $this->containerStats && \is_array($this->containerStats)) {
                $n = 0;
                foreach ($this->containerStats as $item) {
                    $res['ContainerStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliases'])) {
            if (!empty($map['Aliases'])) {
                $model->aliases = $map['Aliases'];
            }
        }
        if (isset($map['ContainerSpec'])) {
            $model->containerSpec = containerSpec::fromMap($map['ContainerSpec']);
        }
        if (isset($map['ContainerStats'])) {
            if (!empty($map['ContainerStats'])) {
                $model->containerStats = [];
                $n                     = 0;
                foreach ($map['ContainerStats'] as $item) {
                    $model->containerStats[$n++] = null !== $item ? containerStats::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
