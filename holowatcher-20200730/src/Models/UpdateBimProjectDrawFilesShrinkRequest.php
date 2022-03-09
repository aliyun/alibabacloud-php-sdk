<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class UpdateBimProjectDrawFilesShrinkRequest extends Model
{
    /**
     * @description 建筑
     *
     * @var string
     */
    public $architectureFilesShrink;

    /**
     * @description 结构
     *
     * @var string
     */
    public $structureFilesShrink;

    /**
     * @description 任务id
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'architectureFilesShrink' => 'ArchitectureFiles',
        'structureFilesShrink'    => 'StructureFiles',
        'taskId'                  => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureFilesShrink) {
            $res['ArchitectureFiles'] = $this->architectureFilesShrink;
        }
        if (null !== $this->structureFilesShrink) {
            $res['StructureFiles'] = $this->structureFilesShrink;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBimProjectDrawFilesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureFiles'])) {
            $model->architectureFilesShrink = $map['ArchitectureFiles'];
        }
        if (isset($map['StructureFiles'])) {
            $model->structureFilesShrink = $map['StructureFiles'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
