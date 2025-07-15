<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class EditShowAndReplaceRequest extends Model
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
     * @example 53200b81-b761-4c10-842a-a0726d97****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The end time of the editing task. Unit: seconds.
     *
     * >
     *
     *   The valid values range from 0 to the value indicated by the total length of the episode.
     *
     *   By default, this parameter is set to the value that indicates the total length of the episode. The editing period cannot exceed the total length of the episode.
     *
     *   If you want to edit a VOD file from the 2nd second to the 5th second, set the StartTime parameter to 2.0 and the EndTime parameter to 5.0.
     *
     * @example 5.0
     *
     * @var float
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the episode to be edited.
     *
     * >  You can obtain the ID from the response parameter ShowId of the [AddShowIntoShowList](https://help.aliyun.com/document_detail/2848051.html) operation.
     *
     * This parameter is required.
     *
     * @example 42200b81-b761-4c10-842a-a0726d97****
     *
     * @var string
     */
    public $showId;

    /**
     * @description The start time of the editing task. Unit: seconds.
     *
     * >
     *
     *   The valid values range from 0 to the value indicated by the total length of the episode. By default, the editing task starts from the beginning of the episode. Default value: 0.0.
     *
     *   If you want to edit a VOD file from the 2nd second to the 5th second, set the StartTime parameter to 2.0 and the EndTime parameter to 5.0.
     *
     * @example 2.0
     *
     * @var float
     */
    public $startTime;

    /**
     * @description The storage information of the episode. The following fields are included:
     *
     *   **StorageLocation**: the storage location of ApsaraVideo VOD.
     *   **FileName**: the custom file name.
     *
     * >  Editing outputs must be stored in the VOD bucket within the same account that is used to access both ApsaraVideo VOD and ApsaraVideo Live. For more information about how to obtain the storage location, see [Manage VOD resources](https://help.aliyun.com/document_detail/86097.html).
     *
     * @example { "StorageLocation":"***bucket***", "FileName":"EditFile****.mp4" }
     *
     * @var string
     */
    public $storageInfo;

    /**
     * @description The user information.
     *
     * @example 900a2b2r8-13c2-****-88f2-75e4a07c1ed9
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'casterId' => 'CasterId',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'showId' => 'ShowId',
        'startTime' => 'StartTime',
        'storageInfo' => 'StorageInfo',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditShowAndReplaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
