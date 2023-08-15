<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource;

use AlibabaCloud\Tea\Model;

class instanceTypeDetail extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 8
     *
     * @var int
     */
    public $mem;
    protected $_name = [
        'cpu' => 'Cpu',
        'mem' => 'Mem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        return $model;
    }
}
