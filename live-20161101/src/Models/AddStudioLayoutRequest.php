<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddStudioLayoutRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $layoutName;

    /**
     * @var string
     */
    public $layoutType;

    /**
     * @var string
     */
    public $commonConfig;

    /**
     * @var string
     */
    public $bgImageConfig;

    /**
     * @var string
     */
    public $screenInputConfigList;

    /**
     * @var string
     */
    public $mediaInputConfigList;

    /**
     * @var string
     */
    public $layerOrderConfigList;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'casterId'              => 'CasterId',
        'layoutName'            => 'LayoutName',
        'layoutType'            => 'LayoutType',
        'commonConfig'          => 'CommonConfig',
        'bgImageConfig'         => 'BgImageConfig',
        'screenInputConfigList' => 'ScreenInputConfigList',
        'mediaInputConfigList'  => 'MediaInputConfigList',
        'layerOrderConfigList'  => 'LayerOrderConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->layoutName) {
            $res['LayoutName'] = $this->layoutName;
        }
        if (null !== $this->layoutType) {
            $res['LayoutType'] = $this->layoutType;
        }
        if (null !== $this->commonConfig) {
            $res['CommonConfig'] = $this->commonConfig;
        }
        if (null !== $this->bgImageConfig) {
            $res['BgImageConfig'] = $this->bgImageConfig;
        }
        if (null !== $this->screenInputConfigList) {
            $res['ScreenInputConfigList'] = $this->screenInputConfigList;
        }
        if (null !== $this->mediaInputConfigList) {
            $res['MediaInputConfigList'] = $this->mediaInputConfigList;
        }
        if (null !== $this->layerOrderConfigList) {
            $res['LayerOrderConfigList'] = $this->layerOrderConfigList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddStudioLayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['LayoutName'])) {
            $model->layoutName = $map['LayoutName'];
        }
        if (isset($map['LayoutType'])) {
            $model->layoutType = $map['LayoutType'];
        }
        if (isset($map['CommonConfig'])) {
            $model->commonConfig = $map['CommonConfig'];
        }
        if (isset($map['BgImageConfig'])) {
            $model->bgImageConfig = $map['BgImageConfig'];
        }
        if (isset($map['ScreenInputConfigList'])) {
            $model->screenInputConfigList = $map['ScreenInputConfigList'];
        }
        if (isset($map['MediaInputConfigList'])) {
            $model->mediaInputConfigList = $map['MediaInputConfigList'];
        }
        if (isset($map['LayerOrderConfigList'])) {
            $model->layerOrderConfigList = $map['LayerOrderConfigList'];
        }

        return $model;
    }
}
