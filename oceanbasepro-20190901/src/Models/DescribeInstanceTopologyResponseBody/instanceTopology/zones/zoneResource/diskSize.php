<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\zoneResource;

use AlibabaCloud\Tea\Model;

class diskSize extends Model
{
    /**
     * @var string[]
     */
    public $maxDiskUsedObServer;

    /**
     * @description DescribeInstanceTopology
     *
     * @example 0.14
     *
     * @var float
     */
    public $maxDiskUsedPercent;
    protected $_name = [
        'maxDiskUsedObServer' => 'MaxDiskUsedObServer',
        'maxDiskUsedPercent'  => 'MaxDiskUsedPercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxDiskUsedObServer) {
            $res['MaxDiskUsedObServer'] = $this->maxDiskUsedObServer;
        }
        if (null !== $this->maxDiskUsedPercent) {
            $res['MaxDiskUsedPercent'] = $this->maxDiskUsedPercent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxDiskUsedObServer'])) {
            if (!empty($map['MaxDiskUsedObServer'])) {
                $model->maxDiskUsedObServer = $map['MaxDiskUsedObServer'];
            }
        }
        if (isset($map['MaxDiskUsedPercent'])) {
            $model->maxDiskUsedPercent = $map['MaxDiskUsedPercent'];
        }

        return $model;
    }
}
