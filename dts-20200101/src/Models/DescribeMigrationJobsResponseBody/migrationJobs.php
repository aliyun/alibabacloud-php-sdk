<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob;

class migrationJobs extends Model
{
    /**
     * @var migrationJob[]
     */
    public $migrationJob;
    protected $_name = [
        'migrationJob' => 'MigrationJob',
    ];

    public function validate()
    {
        if (\is_array($this->migrationJob)) {
            Model::validateArray($this->migrationJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->migrationJob) {
            if (\is_array($this->migrationJob)) {
                $res['MigrationJob'] = [];
                $n1                  = 0;
                foreach ($this->migrationJob as $item1) {
                    $res['MigrationJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MigrationJob'])) {
            if (!empty($map['MigrationJob'])) {
                $model->migrationJob = [];
                $n1                  = 0;
                foreach ($map['MigrationJob'] as $item1) {
                    $model->migrationJob[$n1++] = migrationJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
