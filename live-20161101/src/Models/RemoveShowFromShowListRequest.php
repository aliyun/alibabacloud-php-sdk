<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class RemoveShowFromShowListRequest extends Model
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
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the episode.
     *
     * >  You can obtain the ID by checking the value of the response parameter ShowId of the [AddShowIntoShowList](https://help.aliyun.com/document_detail/370861.html) operation.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $showId;

    /**
     * @description Specifies whether to remove multiple episodes at a time. Valid values:
     *
     *   true: removes multiple episodes at a time.
     *   false: removes a single episode.
     *
     * >  If you do not configure this parameter or this parameter is left empty, a single episode is to be removed.
     *
     * @example false
     *
     * @var bool
     */
    public $isBatchMode;

    /**
     * @description The IDs of episodes that you want to remove.
     *
     * @var string[]
     */
    public $showIdList;
    protected $_name = [
        'casterId' => 'CasterId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'showId' => 'ShowId',
        'isBatchMode' => 'isBatchMode',
        'showIdList' => 'showIdList',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }
        if (null !== $this->isBatchMode) {
            $res['isBatchMode'] = $this->isBatchMode;
        }
        if (null !== $this->showIdList) {
            $res['showIdList'] = $this->showIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveShowFromShowListRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }
        if (isset($map['isBatchMode'])) {
            $model->isBatchMode = $map['isBatchMode'];
        }
        if (isset($map['showIdList'])) {
            if (!empty($map['showIdList'])) {
                $model->showIdList = $map['showIdList'];
            }
        }

        return $model;
    }
}
