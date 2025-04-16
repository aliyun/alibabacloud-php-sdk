<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponseBody\snapshotPackages\snapshotPackage;

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
        if (\is_array($this->snapshotPackage)) {
            Model::validateArray($this->snapshotPackage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotPackage) {
            if (\is_array($this->snapshotPackage)) {
                $res['SnapshotPackage'] = [];
                $n1 = 0;
                foreach ($this->snapshotPackage as $item1) {
                    $res['SnapshotPackage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SnapshotPackage'])) {
            if (!empty($map['SnapshotPackage'])) {
                $model->snapshotPackage = [];
                $n1 = 0;
                foreach ($map['SnapshotPackage'] as $item1) {
                    $model->snapshotPackage[$n1++] = snapshotPackage::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
