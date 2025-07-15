<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveAIStudioRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the template. You can obtain the ID from the response to the CreateLiveAIStudio operation.
     *
     * This parameter is required.
     *
     * @example 369ced1f-c33a-49e5-91da-bdaae3d6c1c2
     *
     * @var string
     */
    public $studioId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'studioId' => 'StudioId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->studioId) {
            $res['StudioId'] = $this->studioId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveAIStudioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StudioId'])) {
            $model->studioId = $map['StudioId'];
        }

        return $model;
    }
}
