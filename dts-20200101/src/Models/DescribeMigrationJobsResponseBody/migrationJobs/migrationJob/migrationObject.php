<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\migrationObject\synchronousObject;
use AlibabaCloud\Tea\Model;

class migrationObject extends Model
{
    /**
     * @var synchronousObject[]
     */
    public $synchronousObject;
    protected $_name = [
        'synchronousObject' => 'SynchronousObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->synchronousObject) {
            $res['SynchronousObject'] = [];
            if (null !== $this->synchronousObject && \is_array($this->synchronousObject)) {
                $n = 0;
                foreach ($this->synchronousObject as $item) {
                    $res['SynchronousObject'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SynchronousObject'])) {
            if (!empty($map['SynchronousObject'])) {
                $model->synchronousObject = [];
                $n                        = 0;
                foreach ($map['SynchronousObject'] as $item) {
                    $model->synchronousObject[$n++] = null !== $item ? synchronousObject::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
