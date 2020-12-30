<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\systemDiskParts\systemDiskPart;
use AlibabaCloud\Tea\Model;

class systemDiskParts extends Model
{
    /**
     * @var systemDiskPart[]
     */
    public $systemDiskPart;
    protected $_name = [
        'systemDiskPart' => 'SystemDiskPart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDiskPart) {
            $res['SystemDiskPart'] = [];
            if (null !== $this->systemDiskPart && \is_array($this->systemDiskPart)) {
                $n = 0;
                foreach ($this->systemDiskPart as $item) {
                    $res['SystemDiskPart'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDiskParts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDiskPart'])) {
            if (!empty($map['SystemDiskPart'])) {
                $model->systemDiskPart = [];
                $n                     = 0;
                foreach ($map['SystemDiskPart'] as $item) {
                    $model->systemDiskPart[$n++] = null !== $item ? systemDiskPart::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
