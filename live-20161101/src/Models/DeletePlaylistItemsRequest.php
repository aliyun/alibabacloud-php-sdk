<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeletePlaylistItemsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the episode list. If the episode list was created by calling the [AddPlaylistItems](https://help.aliyun.com/document_detail/2848078.html) operation, check the value of the response parameter ProgramId to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $programId;

    /**
     * @description The IDs of the episodes that you want to remove.
     *
     * This parameter is required.
     *
     * @example ["c09f3d63-eacf-4fbf-bd48-a07a6ba7****","c10f3d63-eacf-4fbf-bd48-a07a6ba7****"]
     *
     * @var string
     */
    public $programItemIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'programId' => 'ProgramId',
        'programItemIds' => 'ProgramItemIds',
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
        if (null !== $this->programItemIds) {
            $res['ProgramItemIds'] = $this->programItemIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePlaylistItemsRequest
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
        if (isset($map['ProgramItemIds'])) {
            $model->programItemIds = $map['ProgramItemIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
