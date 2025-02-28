<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponseBody\items\migrateTask;

class items extends Model
{
    /**
     * @var migrateTask[]
     */
    public $migrateTask;
    protected $_name = [
        'migrateTask' => 'MigrateTask',
    ];

    public function validate()
    {
        if (\is_array($this->migrateTask)) {
            Model::validateArray($this->migrateTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->migrateTask) {
            if (\is_array($this->migrateTask)) {
                $res['MigrateTask'] = [];
                $n1                 = 0;
                foreach ($this->migrateTask as $item1) {
                    $res['MigrateTask'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MigrateTask'])) {
            if (!empty($map['MigrateTask'])) {
                $model->migrateTask = [];
                $n1                 = 0;
                foreach ($map['MigrateTask'] as $item1) {
                    $model->migrateTask[$n1++] = migrateTask::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
