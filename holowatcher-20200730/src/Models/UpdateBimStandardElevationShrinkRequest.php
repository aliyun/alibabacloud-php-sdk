<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class UpdateBimStandardElevationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $floorsShrink;

    /**
     * @var string
     */
    public $mode;

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
     * @var float
     */
    public $terraceHeight;
    protected $_name = [
        'floorsShrink'  => 'Floors',
        'mode'          => 'Mode',
        'standardId'    => 'StandardId',
        'taskId'        => 'TaskId',
        'terraceHeight' => 'TerraceHeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->floorsShrink) {
            $res['Floors'] = $this->floorsShrink;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->terraceHeight) {
            $res['TerraceHeight'] = $this->terraceHeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBimStandardElevationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Floors'])) {
            $model->floorsShrink = $map['Floors'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TerraceHeight'])) {
            $model->terraceHeight = $map['TerraceHeight'];
        }

        return $model;
    }
}
