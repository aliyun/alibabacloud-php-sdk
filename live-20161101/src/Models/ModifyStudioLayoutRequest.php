<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyStudioLayoutRequest extends Model
{
    /**
     * @var string
     */
    public $bgImageConfig;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $commonConfig;

    /**
     * @var string
     */
    public $layerOrderConfigList;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $layoutName;

    /**
     * @var string
     */
    public $mediaInputConfigList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $screenInputConfigList;
    protected $_name = [
        'bgImageConfig'         => 'BgImageConfig',
        'casterId'              => 'CasterId',
        'commonConfig'          => 'CommonConfig',
        'layerOrderConfigList'  => 'LayerOrderConfigList',
        'layoutId'              => 'LayoutId',
        'layoutName'            => 'LayoutName',
        'mediaInputConfigList'  => 'MediaInputConfigList',
        'ownerId'               => 'OwnerId',
        'screenInputConfigList' => 'ScreenInputConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgImageConfig) {
            $res['BgImageConfig'] = $this->bgImageConfig;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->commonConfig) {
            $res['CommonConfig'] = $this->commonConfig;
        }
        if (null !== $this->layerOrderConfigList) {
            $res['LayerOrderConfigList'] = $this->layerOrderConfigList;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->layoutName) {
            $res['LayoutName'] = $this->layoutName;
        }
        if (null !== $this->mediaInputConfigList) {
            $res['MediaInputConfigList'] = $this->mediaInputConfigList;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->screenInputConfigList) {
            $res['ScreenInputConfigList'] = $this->screenInputConfigList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStudioLayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgImageConfig'])) {
            $model->bgImageConfig = $map['BgImageConfig'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['CommonConfig'])) {
            $model->commonConfig = $map['CommonConfig'];
        }
        if (isset($map['LayerOrderConfigList'])) {
            $model->layerOrderConfigList = $map['LayerOrderConfigList'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['LayoutName'])) {
            $model->layoutName = $map['LayoutName'];
        }
        if (isset($map['MediaInputConfigList'])) {
            $model->mediaInputConfigList = $map['MediaInputConfigList'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ScreenInputConfigList'])) {
            $model->screenInputConfigList = $map['ScreenInputConfigList'];
        }

        return $model;
    }
}
