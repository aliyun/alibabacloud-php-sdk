<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\systemDiskParts\systemDiskPart;

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
        if (\is_array($this->systemDiskPart)) {
            Model::validateArray($this->systemDiskPart);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemDiskPart) {
            if (\is_array($this->systemDiskPart)) {
                $res['SystemDiskPart'] = [];
                $n1 = 0;
                foreach ($this->systemDiskPart as $item1) {
                    $res['SystemDiskPart'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SystemDiskPart'])) {
            if (!empty($map['SystemDiskPart'])) {
                $model->systemDiskPart = [];
                $n1 = 0;
                foreach ($map['SystemDiskPart'] as $item1) {
                    $model->systemDiskPart[$n1] = systemDiskPart::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
