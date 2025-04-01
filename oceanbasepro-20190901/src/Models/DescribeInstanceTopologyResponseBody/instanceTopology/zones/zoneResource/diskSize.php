<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\zoneResource;

use AlibabaCloud\Dara\Model;

class diskSize extends Model
{
    /**
     * @var string[]
     */
    public $maxDiskUsedObServer;

    /**
     * @var float
     */
    public $maxDiskUsedPercent;
    protected $_name = [
        'maxDiskUsedObServer' => 'MaxDiskUsedObServer',
        'maxDiskUsedPercent' => 'MaxDiskUsedPercent',
    ];

    public function validate()
    {
        if (\is_array($this->maxDiskUsedObServer)) {
            Model::validateArray($this->maxDiskUsedObServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxDiskUsedObServer) {
            if (\is_array($this->maxDiskUsedObServer)) {
                $res['MaxDiskUsedObServer'] = [];
                $n1 = 0;
                foreach ($this->maxDiskUsedObServer as $item1) {
                    $res['MaxDiskUsedObServer'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxDiskUsedPercent) {
            $res['MaxDiskUsedPercent'] = $this->maxDiskUsedPercent;
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
        if (isset($map['MaxDiskUsedObServer'])) {
            if (!empty($map['MaxDiskUsedObServer'])) {
                $model->maxDiskUsedObServer = [];
                $n1 = 0;
                foreach ($map['MaxDiskUsedObServer'] as $item1) {
                    $model->maxDiskUsedObServer[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaxDiskUsedPercent'])) {
            $model->maxDiskUsedPercent = $map['MaxDiskUsedPercent'];
        }

        return $model;
    }
}
