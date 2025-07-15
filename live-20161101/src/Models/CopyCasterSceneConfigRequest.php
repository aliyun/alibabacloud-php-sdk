<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CopyCasterSceneConfigRequest extends Model
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
     * @description The ID of the source scene, which must be a PVW scene.
     *
     * This parameter is required.
     *
     * @example f1a361f4-bee3-436d-ae6e-d38e6943****
     *
     * @var string
     */
    public $fromSceneId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the destination scene, which must be a PGM scene.
     *
     * This parameter is required.
     *
     * @example 05ab713c-676e-49c0-96ce-cc408da1****
     *
     * @var string
     */
    public $toSceneId;
    protected $_name = [
        'casterId' => 'CasterId',
        'fromSceneId' => 'FromSceneId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'toSceneId' => 'ToSceneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->fromSceneId) {
            $res['FromSceneId'] = $this->fromSceneId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->toSceneId) {
            $res['ToSceneId'] = $this->toSceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyCasterSceneConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['FromSceneId'])) {
            $model->fromSceneId = $map['FromSceneId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ToSceneId'])) {
            $model->toSceneId = $map['ToSceneId'];
        }

        return $model;
    }
}
