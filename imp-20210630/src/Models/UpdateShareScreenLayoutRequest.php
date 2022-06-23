<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class UpdateShareScreenLayoutRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 课堂唯一标识，由调用CreateClass返回。
     *
     * @var string
     */
    public $classId;

    /**
     * @description 是否开启叠加老师画面
     *
     * @var bool
     */
    public $enableOverlay;

    /**
     * @description 叠加画面高度，归一化为1
     *
     * @var float
     */
    public $overlayHeight;

    /**
     * @description 叠加画面宽度，归一化为1
     *
     * @var float
     */
    public $overlayWidth;

    /**
     * @description 叠加画面X坐标，归一化为1
     *
     * @var float
     */
    public $overlayX;

    /**
     * @description 叠加画面Y坐标，归一化为1
     *
     * @var float
     */
    public $overlayY;
    protected $_name = [
        'appId'         => 'AppId',
        'classId'       => 'ClassId',
        'enableOverlay' => 'EnableOverlay',
        'overlayHeight' => 'OverlayHeight',
        'overlayWidth'  => 'OverlayWidth',
        'overlayX'      => 'OverlayX',
        'overlayY'      => 'OverlayY',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }
        if (null !== $this->enableOverlay) {
            $res['EnableOverlay'] = $this->enableOverlay;
        }
        if (null !== $this->overlayHeight) {
            $res['OverlayHeight'] = $this->overlayHeight;
        }
        if (null !== $this->overlayWidth) {
            $res['OverlayWidth'] = $this->overlayWidth;
        }
        if (null !== $this->overlayX) {
            $res['OverlayX'] = $this->overlayX;
        }
        if (null !== $this->overlayY) {
            $res['OverlayY'] = $this->overlayY;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateShareScreenLayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }
        if (isset($map['EnableOverlay'])) {
            $model->enableOverlay = $map['EnableOverlay'];
        }
        if (isset($map['OverlayHeight'])) {
            $model->overlayHeight = $map['OverlayHeight'];
        }
        if (isset($map['OverlayWidth'])) {
            $model->overlayWidth = $map['OverlayWidth'];
        }
        if (isset($map['OverlayX'])) {
            $model->overlayX = $map['OverlayX'];
        }
        if (isset($map['OverlayY'])) {
            $model->overlayY = $map['OverlayY'];
        }

        return $model;
    }
}
