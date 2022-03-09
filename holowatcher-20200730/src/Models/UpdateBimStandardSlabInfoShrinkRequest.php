<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class UpdateBimStandardSlabInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $legendsShrink;

    /**
     * @var string
     */
    public $rootDir;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @description 任务id
     *
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $thickness;
    protected $_name = [
        'legendsShrink' => 'Legends',
        'rootDir'       => 'RootDir',
        'standardId'    => 'StandardId',
        'taskId'        => 'TaskId',
        'thickness'     => 'Thickness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->legendsShrink) {
            $res['Legends'] = $this->legendsShrink;
        }
        if (null !== $this->rootDir) {
            $res['RootDir'] = $this->rootDir;
        }
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->thickness) {
            $res['Thickness'] = $this->thickness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBimStandardSlabInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Legends'])) {
            $model->legendsShrink = $map['Legends'];
        }
        if (isset($map['RootDir'])) {
            $model->rootDir = $map['RootDir'];
        }
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Thickness'])) {
            $model->thickness = $map['Thickness'];
        }

        return $model;
    }
}
