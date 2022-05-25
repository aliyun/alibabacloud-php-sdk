<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class LabelBuildRequest extends Model
{
    /**
     * @description 重建模式：MANUAL：手动（云端），默认，SEMI_AUTOMATIC：半自动（移动端）
     *
     * @var string
     */
    public $mode;

    /**
     * @description 模型效果 PATCH：切片模型（默认） DEPTH：深度模型 VIRTUAL：虚拟模型 MOBILE：移动重建模型
     *
     * @var string
     */
    public $modelStyle;

    /**
     * @description 墙宽优化，OFF:关闭（默认） NORMAL：标准 ENHANCED：加强
     *
     * @var string
     */
    public $optimizeWallWidth;

    /**
     * @description 户型图，DEFAULT（默认），STANDARD（标准）
     *
     * @var string
     */
    public $planStyle;

    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 墙高，默认0不设置，范围200-1000. 单位cm
     *
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
