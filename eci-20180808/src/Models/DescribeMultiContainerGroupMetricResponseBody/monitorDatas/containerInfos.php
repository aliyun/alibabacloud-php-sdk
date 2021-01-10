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

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'aliases'        => 'Aliases',
        'containerSpec'  => 'ContainerSpec',
        'containerStats' => 'ContainerStats',
        'labels'         => 'Labels',
        'namespace'      => 'Namespace',
        'name'           => 'Name',
        'id'             => 'Id',
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
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
