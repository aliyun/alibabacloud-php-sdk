<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddStudioLayoutRequest extends Model
{
    /**
     * @description The background material configurations. The value is a JSON string. For more information, see **BgImageConfig**.
     *
     * >  This parameter is required only if you set LayoutType to studio.
     *
     * @example { "Id":"k12kj31****", "MaterialId":"f080575eb5f4427684fc0715159a****" }
     *
     * @var string
     */
    public $bgImageConfig;

    /**
     * @description The ID of the production studio.
     *
     * >  The production studio must be a virtual studio that you create in advance. You can use the ApsaraVideo Live console or call the CreateCaster operation to create a virtual studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The common layout configurations. The value is a JSON string. For more information, see **CommonConfig**.
     *
     * >  This parameter is required only if you set LayoutType to common.
     *
     * @example {"ChannelId":"RV01" }
     *
     * @var string
     */
    public $commonConfig;

    /**
     * @description The layer sorting configurations. The value is a JSON string. For more information, see **layerOrderConfig**. You can sort layers of background and multimedia materials. The chroma key layer cannot be sorted. A layer that is in the front of the code is placed behind other layers in the layout.
     *
     * @example [ 	{ 	"Type":"media", 	"Id":"k12kj31****" 	}, 	{ 	"Type":"media", 	"Id":"k12kj31****" 	} ]
     *
     * @var string
     */
    public $layerOrderConfigList;

    /**
     * @description The name of the layout.
     *
     * This parameter is required.
     *
     * @example Test layout
     *
     * @var string
     */
    public $layoutName;

    /**
     * @description The type of the layout. Valid values:
     *
     *   **common**: If you set this parameter to common, you must specify the CommonConfig parameter.
     *   **studio**: If you set this parameter to studio, you must specify the BgImageConfig and ScreenInputConfigList parameters. The MediaInputConfigList parameter is optional.
     *
     * This parameter is required.
     *
     * @example studio
     *
     * @var string
     */
    public $layoutType;

    /**
     * @description The multimedia input configurations. The value is a JSON string. For more information, see **MediaInputConfig**.
     *
     * >  This parameter is optional and is valid only if you set LayoutType to studio.
     *
     * @example [ 	{ 	"Id":"k12kj31****", 	"Index":"1", 	"ChannelId":"RV01", 	"FillMode":"none", 	"PositionRefer":"topLeft", 	"WidthNormalized":"0.4", 	"HeightNormalized":"0.4", 	"PositionNormalized":"[0.1, 0.2]" 	},   { 	"Id":"k12kj31****", 	"Index":"2", 	"ImageMaterialId":"lkajsdfsa8fd89asd8****", 	"FillMode":"none", 	"PositionRefer":"topLeft", 	"WidthNormalized":"0.6", 	"HeightNormalized":"0.4", 	"PositionNormalized":"[0.1, 0.2]" 	} ]
     *
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
    public $regionId;

    /**
     * @description The input configurations for chroma key. The value is a JSON string. For more information, see **ScreenInputConfig**.
     *
     * >  This parameter is required only if you set LayoutType to studio.
     *
     * @example [ 	{ 	"Index":"1", 	"ChannelId":"RV01", 	"Color":"green", 	"PositionX":"0.1", 	"PositionY":"0.2", 	"HeightNormalized":"0.4" 	} ]
     *
     * @var string
     */
    public $screenInputConfigList;
    protected $_name = [
        'bgImageConfig' => 'BgImageConfig',
        'casterId' => 'CasterId',
        'commonConfig' => 'CommonConfig',
        'layerOrderConfigList' => 'LayerOrderConfigList',
        'layoutName' => 'LayoutName',
        'layoutType' => 'LayoutType',
        'mediaInputConfigList' => 'MediaInputConfigList',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'screenInputConfigList' => 'ScreenInputConfigList',
    ];

    public function validate() {}

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
        if (null !== $this->layoutName) {
            $res['LayoutName'] = $this->layoutName;
        }
        if (null !== $this->layoutType) {
            $res['LayoutType'] = $this->layoutType;
        }
        if (null !== $this->mediaInputConfigList) {
            $res['MediaInputConfigList'] = $this->mediaInputConfigList;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->screenInputConfigList) {
            $res['ScreenInputConfigList'] = $this->screenInputConfigList;
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
        if (isset($map['LayoutName'])) {
            $model->layoutName = $map['LayoutName'];
        }
        if (isset($map['LayoutType'])) {
            $model->layoutType = $map['LayoutType'];
        }
        if (isset($map['MediaInputConfigList'])) {
            $model->mediaInputConfigList = $map['MediaInputConfigList'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScreenInputConfigList'])) {
            $model->screenInputConfigList = $map['ScreenInputConfigList'];
        }

        return $model;
    }
}
