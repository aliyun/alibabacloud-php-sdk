<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteCasterEpisodeGroupRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the episode list. If the episode list was added by calling the [AddCasterEpisodeGroup](https://help.aliyun.com/document_detail/2848071.html) operation, check the value of the response parameter ProgramId to obtain the ID.
     *
     * This parameter is required.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf932738****
     *
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'programId' => 'ProgramId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCasterEpisodeGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
