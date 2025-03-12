<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponseBody\snapshotPackages\snapshotPackage;
use AlibabaCloud\Tea\Model;

class snapshotPackages extends Model
{
    /**
     * @var snapshotPackage[]
     */
    public $snapshotPackage;
    protected $_name = [
        'snapshotPackage' => 'SnapshotPackage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotPackage) {
            $res['SnapshotPackage'] = [];
            if (null !== $this->snapshotPackage && \is_array($this->snapshotPackage)) {
                $n = 0;
                foreach ($this->snapshotPackage as $item) {
                    $res['SnapshotPackage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotPackage'])) {
            if (!empty($map['SnapshotPackage'])) {
                $model->snapshotPackage = [];
                $n                      = 0;
                foreach ($map['SnapshotPackage'] as $item) {
                    $model->snapshotPackage[$n++] = null !== $item ? snapshotPackage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
