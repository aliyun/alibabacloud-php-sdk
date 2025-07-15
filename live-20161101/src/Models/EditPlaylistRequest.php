<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class EditPlaylistRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The configurations of the episode list. For more information, see the **ProgramConfig** section of this topic.
     *
     * @example [{"RepeatNumber":"0","ProgramName":"my program"}]
     *
     * @var string
     */
    public $programConfig;

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
     * @description The episodes that you want to add to the production studio. The value is a JSON string. For more information, see the **InputProgramItem** section of this topic.
     *
     * This parameter is required.
     *
     * @example [{"ItemName":"item1","ResourceType":"vod","ResourceValue":"5f8809f2-3352-4d1f-a8f7-86f9429f****"}, {"ItemName": "item2","ResourceType": "vod","ResourceValue": "e7411c0b-dd98-4c61-a545-f8bfba6c****"}]
     *
     * @var string
     */
    public $programItems;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'programConfig' => 'ProgramConfig',
        'programId' => 'ProgramId',
        'programItems' => 'ProgramItems',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->programConfig) {
            $res['ProgramConfig'] = $this->programConfig;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->programItems) {
            $res['ProgramItems'] = $this->programItems;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditPlaylistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProgramConfig'])) {
            $model->programConfig = $map['ProgramConfig'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['ProgramItems'])) {
            $model->programItems = $map['ProgramItems'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
