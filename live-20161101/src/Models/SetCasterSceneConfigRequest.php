<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetCasterSceneConfigRequest extends Model
{
    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/69338.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example 80787064-1c94-4dc1-85ce-9409960a****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The IDs of the components. Components in the scene are listed from the bottom to the top in an array.
     *
     * >  N indicates a sequence number. Examples:\\
     * ComponentId.1 indicates the ID of the first component.\\
     * ComponentId.2 indicates the ID of the second component.
     *
     * @example [ "a2b8e671-2fe5-4642-a2ec-bf931826****", "a2b8e671-2fe5-4642-a2ec-28374657****"]
     *
     * @var string[]
     */
    public $componentId;

    /**
     * @description The ID of the layout. If you call the [DescribeCasterLayouts](https://help.aliyun.com/document_detail/60260.html) operation to query the layouts of the production studio, check the value of the response parameter LayoutId to obtain the ID.
     *
     * @example 0c6da077-f037-49e8-8440-3be13393****
     *
     * @var string
     */
    public $layoutId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the scene.
     *
     * This parameter is required.
     *
     * @example 242b4e2c-c30f-4442-85ba-2e3e4e3d****
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'casterId' => 'CasterId',
        'componentId' => 'ComponentId',
        'layoutId' => 'LayoutId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'sceneId' => 'SceneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCasterSceneConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ComponentId'])) {
            if (!empty($map['ComponentId'])) {
                $model->componentId = $map['ComponentId'];
            }
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
