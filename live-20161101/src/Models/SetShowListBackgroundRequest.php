<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetShowListBackgroundRequest extends Model
{
    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The ID of the material in ApsaraVideo VOD.
     *
     * >  Specify either this parameter or the ResourceUrl parameter.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $materialId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The resource type. Valid values:
     *
     *   LIVE: live stream. You can add a live stream from ApsaraVideo Live or by using a third-party URL.
     *   VOD: on-demand video. You can add an on-demand video from ApsaraVideo VOD or by using a third-party URL.
     *   PIC: image. You can add an image from ApsaraVideo VOD or by using a third-party URL.
     *
     * >  Set this parameter to one of the preceding values, or leave this parameter empty.
     *
     * @example VOD
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The URL of the third-party material.
     *
     * @var string
     */
    public $resourceUrl;
    protected $_name = [
        'casterId' => 'CasterId',
        'materialId' => 'MaterialId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'resourceUrl' => 'ResourceUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceUrl) {
            $res['ResourceUrl'] = $this->resourceUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetShowListBackgroundRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceUrl'])) {
            $model->resourceUrl = $map['ResourceUrl'];
        }

        return $model;
    }
}
