<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class LabelBuildRequest extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $modelStyle;

    /**
     * @var string
     */
    public $optimizeWallWidth;

    /**
     * @var string
     */
    public $planStyle;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var int
     */
    public $wallHeight;
    protected $_name = [
        'mode'              => 'Mode',
        'modelStyle'        => 'ModelStyle',
        'optimizeWallWidth' => 'OptimizeWallWidth',
        'planStyle'         => 'PlanStyle',
        'sceneId'           => 'SceneId',
        'wallHeight'        => 'WallHeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->modelStyle) {
            $res['ModelStyle'] = $this->modelStyle;
        }
        if (null !== $this->optimizeWallWidth) {
            $res['OptimizeWallWidth'] = $this->optimizeWallWidth;
        }
        if (null !== $this->planStyle) {
            $res['PlanStyle'] = $this->planStyle;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->wallHeight) {
            $res['WallHeight'] = $this->wallHeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LabelBuildRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ModelStyle'])) {
            $model->modelStyle = $map['ModelStyle'];
        }
        if (isset($map['OptimizeWallWidth'])) {
            $model->optimizeWallWidth = $map['OptimizeWallWidth'];
        }
        if (isset($map['PlanStyle'])) {
            $model->planStyle = $map['PlanStyle'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['WallHeight'])) {
            $model->wallHeight = $map['WallHeight'];
        }

        return $model;
    }
}
