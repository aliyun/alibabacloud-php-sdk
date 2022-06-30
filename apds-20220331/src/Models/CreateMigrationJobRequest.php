<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\SDK\Apds\V20220331\Models\CreateMigrationJobRequest\migrationJobList;
use AlibabaCloud\Tea\Model;

class CreateMigrationJobRequest extends Model
{
    /**
     * @var migrationJobList[]
     */
    public $migrationJobList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'migrationJobList' => 'migrationJobList',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationJobList) {
            $res['migrationJobList'] = [];
            if (null !== $this->migrationJobList && \is_array($this->migrationJobList)) {
                $n = 0;
                foreach ($this->migrationJobList as $item) {
                    $res['migrationJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['migrationJobList'])) {
            if (!empty($map['migrationJobList'])) {
                $model->migrationJobList = [];
                $n                       = 0;
                foreach ($map['migrationJobList'] as $item) {
                    $model->migrationJobList[$n++] = null !== $item ? migrationJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
