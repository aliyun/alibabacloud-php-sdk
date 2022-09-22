<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponseBody\migrationInstanceSet\migrationInstance;
use AlibabaCloud\Tea\Model;

class migrationInstanceSet extends Model
{
    /**
     * @var migrationInstance[]
     */
    public $migrationInstance;
    protected $_name = [
        'migrationInstance' => 'MigrationInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationInstance) {
            $res['MigrationInstance'] = [];
            if (null !== $this->migrationInstance && \is_array($this->migrationInstance)) {
                $n = 0;
                foreach ($this->migrationInstance as $item) {
                    $res['MigrationInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationInstanceSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationInstance'])) {
            if (!empty($map['MigrationInstance'])) {
                $model->migrationInstance = [];
                $n                        = 0;
                foreach ($map['MigrationInstance'] as $item) {
                    $model->migrationInstance[$n++] = null !== $item ? migrationInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
