<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\DescirbeMigrationJobsResponseBody;

use AlibabaCloud\SDK\Dts\V20160801\Models\DescirbeMigrationJobsResponseBody\migrationJobs\migrationJob;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationJob) {
            $res['MigrationJob'] = [];
            if (null !== $this->migrationJob && \is_array($this->migrationJob)) {
                $n = 0;
                foreach ($this->migrationJob as $item) {
                    $res['MigrationJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationJob'])) {
            if (!empty($map['MigrationJob'])) {
                $model->migrationJob = [];
                $n                   = 0;
                foreach ($map['MigrationJob'] as $item) {
                    $model->migrationJob[$n++] = null !== $item ? migrationJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
