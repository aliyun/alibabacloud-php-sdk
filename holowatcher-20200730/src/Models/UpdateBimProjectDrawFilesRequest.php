<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimProjectDrawFilesRequest\architectureFiles;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimProjectDrawFilesRequest\structureFiles;
use AlibabaCloud\Tea\Model;

class UpdateBimProjectDrawFilesRequest extends Model
{
    /**
     * @description 建筑
     *
     * @var architectureFiles[]
     */
    public $architectureFiles;

    /**
     * @description 结构
     *
     * @var structureFiles[]
     */
    public $structureFiles;

    /**
     * @description 任务id
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'architectureFiles' => 'ArchitectureFiles',
        'structureFiles'    => 'StructureFiles',
        'taskId'            => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureFiles) {
            $res['ArchitectureFiles'] = [];
            if (null !== $this->architectureFiles && \is_array($this->architectureFiles)) {
                $n = 0;
                foreach ($this->architectureFiles as $item) {
                    $res['ArchitectureFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->structureFiles) {
            $res['StructureFiles'] = [];
            if (null !== $this->structureFiles && \is_array($this->structureFiles)) {
                $n = 0;
                foreach ($this->structureFiles as $item) {
                    $res['StructureFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBimProjectDrawFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureFiles'])) {
            if (!empty($map['ArchitectureFiles'])) {
                $model->architectureFiles = [];
                $n                        = 0;
                foreach ($map['ArchitectureFiles'] as $item) {
                    $model->architectureFiles[$n++] = null !== $item ? architectureFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StructureFiles'])) {
            if (!empty($map['StructureFiles'])) {
                $model->structureFiles = [];
                $n                     = 0;
                foreach ($map['StructureFiles'] as $item) {
                    $model->structureFiles[$n++] = null !== $item ? structureFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
