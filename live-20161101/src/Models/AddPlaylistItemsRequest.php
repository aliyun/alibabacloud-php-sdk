<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddPlaylistItemsRequest extends Model
{
    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * The production studio must use the following configurations:
     *
     *   **NormType**: 3****. You need to call the **CreateCaster** operation to create a production studio for lightweight carousel playback in advance.
     *   **CasterTemplate**: lp_noTranscode.
     *   **channelEnable**: 0.
     *   **programEffect**: 1.
     *
     * This parameter is required.
     *
     * @example 0e94d1f4-1a65-445c-9dcf-de8b3b8d****
     *
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The configurations of the episode list. If the episode list is added to the production studio for the first time, specify this parameter to pass in the initial configurations. For more information, see the **ProgramConfig** section of this topic.
     *
     * @example [{"RepeatNumber":"0","ProgramName":"my program"}]
     *
     * @var string
     */
    public $programConfig;

    /**
     * @description The ID of the episode list. If you do not specify this parameter, an episode list is created by default.
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
        'casterId' => 'CasterId',
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
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
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
     * @return AddPlaylistItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
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
